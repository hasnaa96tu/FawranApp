<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    //

    function __construct()
    {
         $this->middleware('permission:offer-list|offer-create|offer-edit|offer-delete', ['only' => ['index','show']]);
         $this->middleware('permission:offer-create', ['only' => ['create','store']]);
         $this->middleware('permission:offer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:offer-delete', ['only' => ['destroy']]);
    }
}
