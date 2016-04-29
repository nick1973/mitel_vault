<?php

namespace App\Http\Controllers\Backend;

use App\BTSolutions;
use App\Competitor;
use App\Hardware;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lob;
use App\Maintenance;
use App\Peripherals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Mivb_BundleController extends Controller
{
    function index()
    {
        $customer = 1;
        $array = 1;
        $bundle_name = null;
        $obj = file_get_contents('http://btbeqt.com/hardware_flat');
        $json = json_decode($obj, true);
        $hardware = Hardware::get();
        return view('backend.bundles.index', compact('customer', 'bundle_name', 'json', 'hardware', 'array', 'obj'));
    }


}
