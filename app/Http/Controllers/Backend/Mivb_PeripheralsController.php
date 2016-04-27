<?php

namespace App\Http\Controllers\Backend;

use App\BTSolutions;
use App\Competitor;
use App\Hardware;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lob;
use App\Maintenance;
use App\Mivb_Peripherals;
use App\Peripherals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Mivb_PeripheralsController extends Controller
{
    function index()
    {
        return view('backend.mivb_peripherals.index');
    }

    function create()
    {
        return view('backend.mivb_peripherals.create');
    }

    function store(Request $request)
    {
        if (!Mivb_Peripherals::where('name', $request->input('name'))->exists() ||
            !Mivb_Peripherals::where('supplier_ref', $request->input('supplier_ref'))->exists() ||
            !Mivb_Peripherals::where('bt_ref', $request->input('bt_ref'))->exists()
        ) {
            $data = $request->input();
            Mivb_Peripherals::create($data);
            return redirect()->action('Backend\Mivb_PeripheralsController@index');
        }

        Session::flash('exists', 'Product already exists!');
        return redirect()->back();

    }

    function edit($id)
    {
        $product = Mivb_Peripherals::find($id);
        return view('backend.mivb_peripherals.edit', compact('product'));
    }

    function update(Request $request, $id)
    {
        $products = Mivb_Peripherals::where('id', $id)->first();
        $input = $request->all();
        $products->fill($input)->save();
        Session::flash('success', 'Your Hardware has been saved!');
        return redirect()->action('Backend\Mivb_PeripheralsController@index');
    }

    function destroy($id)
    {
        Mivb_Peripherals::where('id', $id)->delete();
        return redirect()->action('Backend\Mivb_PeripheralsController@index');
    }
}
