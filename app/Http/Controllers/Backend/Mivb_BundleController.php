<?php

namespace App\Http\Controllers\Backend;

use App\BTSolutions;
use App\Competitor;
use App\Hardware;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lob;
use App\Maintenance;
use App\Mitelbundle;
use App\Peripherals;
use App\Product;
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

    function build($id)
    {
        $bundle = Mitelbundle::find($id);
        $customer = 1;
        $obj = file_get_contents('http://btbeqt.com/hardware_flat');
        $json = json_decode($obj, true);
        $obj = file_get_contents('http://btbeqt.com/software_flat');
        $json_software = json_decode($obj, true);
        return view('backend.bundles.build', compact('bundle', 'customer', 'json', 'json_software'));
    }

    function create()
    {
        return view('backend.bundles.create');
    }

    public function update(Request $request, $id)
    {
        if ($request->input('product_id') == null) {
            $product_id = [];
        } else {
            $product_id = $request->input('product_id');
        }
        $bundle = Mitelbundle::find($id);
        $bundle->products()->sync($product_id);
        return redirect()->back();

    }

    function store(Request $request)
    {
        if (!Mitelbundle::where('name', $request->input('name'))->exists()) {
            $data = $request->input();
            Mitelbundle::create($data);
            return redirect()->action('Backend\Mivb_bundleController@index');
        }

        Session::flash('exists', 'Product already exists!');
        return redirect()->back();

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
