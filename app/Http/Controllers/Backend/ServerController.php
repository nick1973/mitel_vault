<?php

namespace App\Http\Controllers\Backend;

use App\BTSolutions;
use App\Competitor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lob;
use App\Maintenance;
use App\Peripherals;
use App\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServerController extends Controller
{
    function index()
    {
        return view('backend.servers.index');
    }
}
