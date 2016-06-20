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
use App\Upgrade;
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
        $obj = file_get_contents('http://btbeqt.com/upgrades_flat');
        $json_upgrades = json_decode($obj, true);
        return view('backend.bundles.build', compact('bundle', 'customer', 'json', 'json_software', 'json_upgrades'));
    }

    function edit($id)
    {
        $bundle = Mitelbundle::find($id);
        $bundle_upgrades = Upgrade::get();
        $upgrades = $bundle->upgrades;
        return view('backend.bundles.edit', compact('bundle', 'bundle_upgrades', 'upgrades'));
    }

    function create()
    {
        return view('backend.bundles.create');
    }

    public function update(Request $request, $id)
    {
        $bundle = Mitelbundle::find($id);

        if ($request->input('product_id') == null) {
            $product_id = [];
        } else {
            $product_id = $request->input('product_id');

            $bundle->products()->sync($product_id);
            return redirect()->back();
        }
        if ($request->input('upgrades_id') == null) {
            $upgrade_id = [];
        } else {
            $upgrade_id = $request->input('upgrades_id');

            $bundle->upgrades()->sync($upgrade_id);
            return redirect()->back();
        }

        if ($request->hasFile('image')) {
            $input = $request->all();

            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads', $fileName);

            array_pull($input, 'image');
            $add_image = array_add($input, 'image', 'uploads/' . $fileName);

            $bundle->fill($add_image)->save();

        } else {
            $input = $request->except('image');
            $bundle->fill($input)->save();
        }
        //$bundle->fill($input)->save();
        return redirect()->action('Backend\Mivb_bundleController@index');
    }

    function destroy($id)
    {
        Mitelbundle::where('id', $id)->delete();
        return redirect()->action('Backend\Mivb_bundleController@index');
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
