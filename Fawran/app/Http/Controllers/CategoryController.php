<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Type;
class CategoryController extends Controller
{
    //
    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','show']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        //
        $cat=Category::all();
        return view('category.index')
        ->with('cat',$cat);
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
        //
        $type=Type::all();
        return view('category.create')
        ->with('type',$type);
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
   $cat= new Category();
   $cat->type_id=$request->type_id;
       $cat->name=$request->name;
      $cat->name_ar=$request->name_ar;
       $cat->save();

       return redirect('/category');
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
        $cat=Category::find($id);
        return view('category.show')
        ->with('cat',$cat);
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
        $type=Type::all();
        $cat=Category::find($id);
        return view('category.edit')
        ->with('cat',$cat)
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
   $cat= Category::findOrFail($id);
   $cat->type_id=$request->type_id;
       $cat->name=$request->name;
      $cat->name_ar=$request->name_ar;
       $cat->update();
        return redirect('/category');
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


        $cat=Category::findOrFail($id);
        $cat->delete();
        return redirect('/category');
    }
}
