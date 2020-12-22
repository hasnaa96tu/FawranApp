<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppRateController extends Controller
{
    //
    function __construct()
    {
         $this->middleware('permission:apprate-list|apprate-create|apprate-edit|apprate-delete', ['only' => ['index','show']]);
         $this->middleware('permission:apprate-create', ['only' => ['create','store']]);
         $this->middleware('permission:apprate-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:apprate-delete', ['only' => ['destroy']]);
    }
}
