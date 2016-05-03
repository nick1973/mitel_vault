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
use Illuminate\Support\Facades\Session;

class HardwareController extends Controller
{
    function index()
    {
        return view('backend.hardware.index');
    }

    function create()
    {
        return view('backend.products.create');
    }

    function store(Request $request)
    {
        if (!Hardware::where('name', $request->input('name'))->exists() ||
            !Hardware::where('supplier_ref', $request->input('supplier_ref'))->exists() ||
            !Hardware::where('bt_ref', $request->input('bt_ref'))->exists()
        ) {
            $data = $request->input();
            Hardware::create($data);
            return redirect()->action('Backend\HardwareController@index');
        }

        Session::flash('exists', 'Product already exists!');
        return redirect()->back();

    }

    function edit($id)
    {
        $product = Hardware::find($id);
        return view('backend.hardware.edit', compact('product'));
    }

    function update(Request $request, $id)
    {
        $products = Hardware::where('id', $id)->first();
        $input = $request->all();
        $products->fill($input)->save();
        Session::flash('success', 'Your Hardware has been saved!');
        return redirect()->action('Backend\HardwareController@index');
    }

    function destroy($id)
    {
        Hardware::where('id', $id)->delete();
        return redirect()->action('Backend\HardwareController@index');
    }
}
