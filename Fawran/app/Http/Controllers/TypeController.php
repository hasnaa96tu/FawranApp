<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
class TypeController extends Controller
{
    //
    function __construct()
    {
         $this->middleware('permission:type-list|type-create|type-edit|type-delete', ['only' => ['index','show']]);
         $this->middleware('permission:type-create', ['only' => ['create','store']]);
         $this->middleware('permission:type-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:type-delete', ['only' => ['destroy']]);
    }
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        //
        $types=Type::all();
        return view('type.index')
        ->with('types',$types);
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
        //
        return view('type.create');
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
   $type= new Type();
       $type->name=$request->name;
      $type->name_ar=$request->name_ar;
       $type->save();

       return redirect('/type');
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
        $type=Type::find($id);
        return view('type.show')
        ->with('type',$type);
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
        $type=type::find($id);
        return view('type.edit')
        ->with('type',$type);
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
   $type= Type::findOrFail($id);
       $type->name=$request->name;
      $type->name_ar=$request->name_ar;
       $type->update();
        return redirect('/type');
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


        $type=Type::findOrFail($id);
        $type->delete();
        return redirect('/type');
    }
}
