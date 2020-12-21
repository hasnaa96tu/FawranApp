<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_type;
use App\User;
class UserTypeController extends Controller
{
    //
    function __construct()
    {
         $this->middleware('permission:user-type-list|user-type-create|user-type-edit|user-type-delete', ['only' => ['index','show']]);
         $this->middleware('permission:user-type-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-type-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-type-delete', ['only' => ['destroy']]);
    }
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        //
        $user_types=User_type::all();
        return view('users.userType.index')
        ->with('user_types',$user_types);
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
        //
        return view('users.userType.create');
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
           'name'=>'required',
           'name_ar'=>'required',
         ]);
   $type= new User_type();
       $type->name=$request->name;
      $type->name_ar=$request->name_ar;
       $type->save();

       return redirect('/user_type');
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
        $user_type=User_type::find($id);
        return view('users.userType.show')
        ->with('user_type',$user_type);
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
        $user_type=User_type::find($id);
        return view('users.userType.edit')
        ->with('user_type',$user_type);
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
           'name'=>'required',
           'name_ar'=>'required',
         ]);
   $type= User_type::findOrFail($id);
       $type->name=$request->name;
      $type->name_ar=$request->name_ar;
       $type->update();
        return redirect('/user_type');
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
        $user=User::where('user_type_id',$id)->get();
        foreach($user as $u){
            $u->delete();
        }


        $user_type=User_type::findOrFail($id);
        $user_type->delete();
        return redirect('/user_type');
    }
}
