<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
    public function show($id)
    {
        //
        $user=User::find($id);
        return view('users.user.show')
        ->with('user',$user);
    }
    public function destroy($id)
    {
        //



        $user=User::findOrFail($id);
        $user->delete();
        return redirect('/user');
    }
}
