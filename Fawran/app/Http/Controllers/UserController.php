<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
class UserController extends Controller
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
        $users=User::all();
        return view('users.user.index')
        ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.user.create',compact('roles'));
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request, [
           'name' => 'required|string|max:255|unique:users',
             'user_type_id'=> 'required',
           'email' => 'required|email',
           'password' => 'required|same:confirm-password',
           'roles' => 'required'
       ]);

       $input = $request->all();
       $input['password'] = Hash::make($input['password']);

       $user = User::create($input);
       $user->status=1;
       $user->user_code=000000;
       $user->save();
       $user->assignRole($request->input('roles'));

       return redirect()->route('users.index')
                       ->with('success','User created successfully');
   }

    public function show($id)
    {
        //
        $user=User::find($id);
        return view('users.user.show')
        ->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('users.user.edit',compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required|string|max:255|unique:users'.$id,
            'user_type_id'=> 'required',
          'email' => 'required|email',

            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        //



        $user=User::findOrFail($id);
        $user->delete();
        return redirect('/user')
         ->with('success','User deleted successfully');
    }
}
