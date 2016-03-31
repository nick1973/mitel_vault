<?php

namespace App\Http\Controllers\Backend;

use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SystemMatrixController extends Controller
{
    function index()
    {
        return view('backend.system_matrix.index');
    }
}
