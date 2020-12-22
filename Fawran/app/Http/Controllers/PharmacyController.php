<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;
use App\Available_time;

class PharmacyController extends Controller
{
  function __construct()
  {
       $this->middleware('permission:pharmacy-list|pharmacy-create|pharmacy-edit|pharmacy-delete', ['only' => ['index','show']]);
       $this->middleware('permission:pharmacy-create', ['only' => ['create','store']]);
       $this->middleware('permission:pharmacy-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:pharmacy-delete', ['only' => ['destroy']]);
  }

   //Show All Pharmacies
    public function index()
    {
        $pharmacies=Pharmacy::all();
        return view('users.pharmacy.index')->with('pharmacies',$pharmacies);
    }

    //Create New Pharmacy View
    public function create()
    {

        return view('users.pharmacy.create');
    }

    //Add New Pharmacy To Database
    public function store(Request $request)
    {

      request()->validate([
        'category_id'=>'required',
           'name'=>'required',
           'name_ar'=>'required',
           'location'=>'required',
           'location_ar'=>'required',
           'phone_number'=>'required',
           'image'=>'required',


         ]);
         $pharmacy= new Pharmacy();
         $pharmacy->category_id=$request->category_id;
         $pharmacy->name=$request->name;
         $pharmacy->name_ar=$request->name_ar;
         $pharmacy->location=$request->location;
         $pharmacy->location_ar=$request->location_ar;
         $pharmacy->phone_number=$request->phone_number;


        // get current time and append the upload file extension to it, // then put that name to $photoName variable.
         $img1 = $request->file('image');
         $img2=time().'.'.$request->image->getClientOriginalExtension();
        /*
         talk the select file and move it public directory and make avatars folder if doesn't exsit then give it that unique name.
        */
        $request->image->move(public_path('assets/img'), $img2);
        $pharmacy->image=$img2;

       $pharmacy->save();

       $available= new Available_time();
       $available->type_id = $request->type_id;
       $available->ph_sm_id=$pharmacy->id;
       $available->open_time=$request->open_time;
       $available->close_time=$request->close_time;

       $days_string = $request->offDay;
       $days  = implode(', ', $days_string );
       $available->days= $days;
       $available->save();


       return redirect('/users/pharmacy');
    }
    public function show($id)
    {
        //
        $cus=Customer::find($id);
        return view('users.customer.show')
        ->with('cus',$cus);
    }

   //Edit Specific Pharmacy
    public function edit($id)
    {

        $pharmacy=Pharmacy::find($id);
        return view('users.pharmacy.edit')->with('pharmacy',$pharmacy);
    }

     // Update Specific Pharmacy
    public function update(Request $request,$id)
    {


        request()->validate([
            'category_id'=>'required',
            'name'=>'required',
            'name_ar'=>'required',
            'location'=>'required',
            'location_ar'=>'required',
            'phone_number'=>'required',
            'image'=>'required',




         ]);
         $pharmacy=  Pharmacy::findOrFail($id);
         $pharmacy->category_id=$request->category_id;
         $pharmacy->name=$request->name;
         $pharmacy->name_ar=$request->name_ar;
         $pharmacy->location=$request->location;
         $pharmacy->location_ar=$request->location_ar;
         $pharmacy->phone_number=$request->phone_number;
                     if ($request->image){
             // get current time and append the upload file extension to it,
                            // then put that name to $photoName variable.
                               $img1 = $request->file('image');
                                $img2=time().'.'.$request->image->getClientOriginalExtension();


                            /*
                            talk the select file and move it public directory and make avatars
                            folder if doesn't exsit then give it that unique name.
                            */
                            $request->image->move(public_path('assets/img'), $img2);

                   $pharmacy->image=$img2;
                 }



                 $pharmacy->update();

                 $ph_sm_id = $id;

                 $available= Available_time::where('ph_sm_id', $ph_sm_id)->firstOrFail();
                 $available->type_id = $request->type_id;

                 $available->open_time=$request->open_time;
                 $available->close_time=$request->close_time;

                 $days_string = $request->offDay;
                 $days  = implode(', ', $days_string );
                 $available->days= $days;
                 $available->save();


       return redirect('/users/pharmacy');
    }

    // Delete Pharmacy By ID
    public function destroy($id)
    {

        $pharmacy=Pharmacy::findOrFail($id);

        $pharmacy->delete();

        return redirect('/users/pharmacy');
    }
}
