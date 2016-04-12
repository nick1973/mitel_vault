<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SelectionController extends Controller
{
    function index()
    {
        return view('frontend.selection.index');
    }
}
