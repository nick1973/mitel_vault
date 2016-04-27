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

class SoftwareController extends Controller
{
    function index()
    {
        return view('backend.software.index');
    }

    function create()
    {
        return view('backend.software.create');
    }

    function store(Request $request)
    {
        if (!Software::where('name', $request->input('name'))->exists() ||
            !Software::where('supplier_ref', $request->input('supplier_ref'))->exists() ||
            !Software::where('bt_ref', $request->input('bt_ref'))->exists()
        ) {
            $data = $request->input();
            Software::create($data);
            return redirect()->action('Backend\SoftwareController@index');
        }

        Session::flash('exists', 'Product already exists!');
        return redirect()->back();

    }

    function edit($id)
    {
        $product = Software::find($id);
        return view('backend.software.edit', compact('product'));
    }

    function update(Request $request, $id)
    {
        $products = Software::where('id', $id)->first();
        $input = $request->all();
        $products->fill($input)->save();
        Session::flash('success', 'Your Hardware has been saved!');
        return redirect()->action('Backend\SoftwareController@index');
    }

    function destroy($id)
    {
        Software::where('id', $id)->delete();
        return redirect()->action('Backend\SoftwareController@index');
    }
}
