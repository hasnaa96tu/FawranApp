<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    //
    function __construct()
    {
         $this->middleware('permission:feedback-list|feedback-create|feedback-edit|feedback-delete', ['only' => ['index','show']]);
         $this->middleware('permission:feedback-create', ['only' => ['create','store']]);
         $this->middleware('permission:feedback-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:feedback-delete', ['only' => ['destroy']]);
    }
}
