<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drug;

class DrugController extends Controller
{
      //Show All Drugs
      public function index()
      {
          $drug=Drug::all();
          return view('users.drug.index')->with('drug',$drug);
      }

      //Create New Drug View
      public function create()
      {
        $drug=Drug::all();
          return view('users.drug.create')->with('drug',$drug);
      }

        //Add New Drug To Database
    public function store(Request $request)
    {

      request()->validate([
           'name'=>'required',
           'name_ar'=>'required',
           'price'=>'required',
           'offer_price'=>'required',
           'pharmacy_id'=>'required',
           'medical_company_id'=>'required',
           'category_id'=>'required',
           'is_aviliable'=>'required',
           'image'=>'required',
         
         

         ]);
         $Drug= new Drug();
         $Drug->name=$request->name;
         $Drug->name_ar=$request->name_ar;
         $Drug->price=$request->price;
         $Drug->offer_price=$request->offer_price;
         $Drug->pharmacy_id=$request->pharmacy_id;
         $Drug->medical_company_id=$request->medical_company_id;
         $Drug->is_aviliable=$request->is_aviliable;
         $Drug->category_id=$request->category_id;
          // get current time and append the upload file extension to it, // then put that name to $photoName variable.
          $img1 = $request->file('image');
          $img2=time().'.'.$request->image->getClientOriginalExtension();
         /*
          talk the select file and move it public directory and make avatars folder if doesn't exsit then give it that unique name.
         */
         $request->image->move(public_path('assets/img'), $img2);
         $Drug->image=$img2;
 
         $Drug->save();



       return redirect('/users/drug');
    }
  
}
