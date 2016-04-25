<?php

namespace App\Http\Controllers\Backend;

use App\BTSolutions;
use App\Competitor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lob;
use App\Maintenance;
use App\Peripherals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class peripheralsController extends Controller
{
    function index()
    {
        $peripherals = Peripherals::get();
        return view('backend.products.index', compact('peripherals'));
    }
}
