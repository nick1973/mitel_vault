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
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Mivb_BundleController extends Controller
{
    function index()
    {
        return view('backend.bundles.index');
    }

    function index2()
    {
        $customer = 1;
        $array = 1;
        $bundle_name = null;
        $obj = file_get_contents('http://btbeqt.com/hardware_flat');
        $json = json_decode($obj, true);
//        $product = Products::get();
        return view('backend.bundles.index2', compact('customer', 'bundle_name', 'json', 'array', 'obj'));
    }


}
