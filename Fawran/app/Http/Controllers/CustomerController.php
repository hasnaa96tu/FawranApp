<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Customer;
use App\User;
class CustomerController extends Controller
{
    //
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        //
        $cus=Customer::all();
        return view('users.customer.index')
        ->with('cus',$cus);
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
        //

        return view('users.customer.create');
    }

    /**
        * Store a newly created resource in storage.
        *
        * @return Response
        */
    public function store(Request $request)
    {
        //
        request()->validate([
           'fullname'=>'required',
           'fullname_ar'=>'required',
           'location'=>'required',
           'location_ar'=>'required',
           'phone_number'=>'required',
           'image'=>'required',
           'name'=>'required',

           'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],

         ]);
         $user= new User();
         $user->name=$request->name;
          $user->name_ar=$request->name;
           $user->email=$request->email;
            $user->password=Hash::make($request->password);
             $user->user_type_id=4;
             $user->status=1;
             $user->user_code=000000;
             $user->save();

   $cus= new Customer();
       $cus->fullname=$request->fullname;
       $cus->fullname_ar=$request->fullname_ar;
       $cus->location=$request->location;
       $cus->location_ar=$request->location_ar;
       $cus->phone_number=$request->phone_number;
       $cus->user_id=$user->id;

        // get current time and append the upload file extension to it,
                       // then put that name to $photoName variable.
                          $img1 = $request->file('image');
                           $img2=time().'.'.$request->image->getClientOriginalExtension();


                       /*
                       talk the select file and move it public directory and make avatars
                       folder if doesn't exsit then give it that unique name.
                       */
                       $request->image->move(public_path('assets/img'), $img2);

              $cus->image=$img2;
       $cus->save();

       return redirect('/customer');
    }

    /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function show($id)
    {
        //
        $cus=Customer::find($id);
        return view('users.customer.show')
        ->with('cus',$cus);
    }

    /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function edit($id)
    {
        //
        $cus=Customer::find($id);
        return view('users.customer.edit')
        ->with('cus',$cus);
    }

    /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function update(Request $request,$id)
    {
        //



        request()->validate([
           'fullname'=>'required',
           'fullname_ar'=>'required',
           'location'=>'required',
           'location_ar'=>'required',
           'phone_number'=>'required',



         ]);
         $cus=  Customer::findOrFail($id);
             $cus->fullname=$request->fullname;
             $cus->fullname_ar=$request->fullname_ar;
             $cus->location=$request->location;
             $cus->location_ar=$request->location_ar;
             $cus->phone_number=$request->phone_number;
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

                   $cus->image=$img2;
                 }

             $cus->update();



       return redirect('/customer');
    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function destroy($id)
    {
        //


        $cus=Customer::findOrFail($id);
        $user=User::where('id',$cus->user_id);
        $user->delete();

        return redirect('/customer');
    }
}
