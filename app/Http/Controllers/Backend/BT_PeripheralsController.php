<?php

namespace App\Http\Controllers\Backend;

use App\BT_Peripherals;
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

class BT_PeripheralsController extends Controller
{
    function index()
    {
        return view('backend.bt_peripherals.index');
    }

    function create()
    {
        return view('backend.bt_peripherals.create');
    }

    function store(Request $request)
    {
        if (!BT_Peripherals::where('name', $request->input('name'))->exists() ||
            !BT_Peripherals::where('supplier_ref', $request->input('supplier_ref'))->exists() ||
            !BT_Peripherals::where('bt_ref', $request->input('bt_ref'))->exists()
        ) {
            $data = $request->input();
            BT_Peripherals::create($data);
            return redirect()->action('Backend\BT_PeripheralsController@index');
        }

        Session::flash('exists', 'Product already exists!');
        return redirect()->back();

    }

    function edit($id)
    {
        $product = BT_Peripherals::find($id);
        return view('backend.bt_peripherals.edit', compact('product'));
    }

    function update(Request $request, $id)
    {
        $products = BT_Peripherals::where('id', $id)->first();
        $input = $request->all();
        $products->fill($input)->save();
        Session::flash('success', 'Your Hardware has been saved!');
        return redirect()->action('Backend\BT_PeripheralsController@index');
    }

    function destroy($id)
    {
        BT_Peripherals::where('id', $id)->delete();
        return redirect()->action('Backend\BT_PeripheralsController@index');
    }
}