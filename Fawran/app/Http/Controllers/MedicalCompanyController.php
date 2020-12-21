<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medical_company;

class MedicalCompanyController extends Controller
{
    //Show All Companies
    public function index()
    {
        $company=Medical_company::all();
        return view('users.company.index')->with('company',$company);
    }

      //Create New Company View
      public function create()
      {
          
          return view('users.company.create');
      }
    //Add New Company To Database
    public function store(Request $request)
    {

      request()->validate([
           'name'=>'required',
           'name_ar'=>'required',
         
         

         ]);
         $company= new Medical_company();
         $company->name=$request->name;
         $company->name_ar=$request->name_ar;
         $company->save();



       return redirect('/users/company');
    }
 //Edit Specific Company
 public function edit($id)
 {
     
     $company = Medical_company::find($id);
     return view('users.company.edit')->with('company',$company);
 }
      // Update Specific Company
      public function update(Request $request,$id)
      {
          
  
          request()->validate([
              'name'=>'required',
              'name_ar'=>'required',
          
            
  
  
  
           ]);
           $company=  Medical_company::findOrFail($id);
       
           $company->name=$request->name;
           $company->name_ar=$request->name_ar;
           $company->update();
  
               
            
                 
         return redirect('/users/company');
      }
  
      // Delete Company By ID
      public function destroy($id)
      {
          
          $company=Medical_company::findOrFail($id);
        
          $company->delete();
  
          return redirect('/users/company');
      }
}
