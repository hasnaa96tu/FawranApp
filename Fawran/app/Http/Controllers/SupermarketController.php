<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supermarket;
use App\Available_time;

class SupermarketController extends Controller
{
    
   //Show All Supermarkets
   public function index()
   {
       $supermarkets=Supermarket::all();
       return view('users.supermarket.index')->with('supermarkets',$supermarkets);
   }

   //Create New Supermarket View
   public function create()
   {
       
       return view('users.supermarket.create');
   }

   //Add New Supermarket To Database
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
        $supermarket= new Supermarket();
        $supermarket->category_id=$request->category_id;
        $supermarket->type_id=$request->type_id;
        $supermarket->name=$request->name;
        $supermarket->name_ar=$request->name_ar;
        $supermarket->location=$request->location;
        $supermarket->location_ar=$request->location_ar;
        $supermarket->phone_number=$request->phone_number;


       // get current time and append the upload file extension to it, // then put that name to $photoName variable.
        $img1 = $request->file('image');
        $img2=time().'.'.$request->image->getClientOriginalExtension();
       /*
        talk the select file and move it public directory and make avatars folder if doesn't exsit then give it that unique name.
       */
       $request->image->move(public_path('assets/img'), $img2);
       $supermarket->image=$img2;

      $supermarket->save();
      $available= new Available_time();
      $available->type_id = $request->type_id;
      $available->ph_sm_id=$supermarket->id;
      $available->open_time=$request->open_time;
      $available->close_time=$request->close_time;
      $available->save();

      return redirect('/users/supermarket');
   }
   public function show($id)
   {
       //
       $cus=Customer::find($id);
       return view('users.supermarket.show')
       ->with('cus',$cus);
   }
   
  //Edit Specific Supermarket
   public function edit($id)
   {
       
       $supermarket=Supermarket::find($id);
       return view('users.supermarket.edit')->with('supermarket',$supermarket);
   }

    // Update Specific Supermarket
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
        $supermarket=  Supermarket::findOrFail($id);
        $supermarket->category_id=$request->category_id;
        $supermarket->type_id=$request->type_id;
        $supermarket->name=$request->name;
        $supermarket->name_ar=$request->name_ar;
        $supermarket->location=$request->location;
        $supermarket->location_ar=$request->location_ar;
        $supermarket->phone_number=$request->phone_number;

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

                  $supermarket->image=$img2;
                }

            $supermarket->update();

            $ph_sm_id = $id;
                
            $available= Available_time::where('ph_sm_id', $ph_sm_id)->firstOrFail();
            $available->type_id = $request->type_id;
         
            $available->open_time=$request->open_time;
            $available->close_time=$request->close_time;
          
            $available->save();
     

      return redirect('/users/supermarket');
   }

   // Delete supermarket By ID
   public function destroy($id)
   {
       
       $supermarket=Supermarket::findOrFail($id);
     
       $supermarket->delete();

       return redirect('/users/supermarket/');
   }
}
