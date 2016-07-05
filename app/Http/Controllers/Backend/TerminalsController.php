<?php

namespace App\Http\Controllers\Backend;

use App\BTSolutions;
use App\Competitor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lob;
use App\Maintenance;
use App\Peripherals;
use App\Terminals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TerminalsController extends Controller
{
    function index()
    {
        return view('backend.terminals.index');
    }

    function create()
    {
        return view('backend.terminals.create');
    }

    function store(Request $request)
    {
        if (!Terminals::where('name', $request->input('name'))->exists() ||
            !Terminals::where('supplier_ref', $request->input('supplier_ref'))->exists() ||
            !Terminals::where('bt_ref', $request->input('bt_ref'))->exists()
        ) {
            $data = $request->input();
            Terminals::create($data);
            return redirect()->action('Backend\TerminalsController@index');
        }

        Session::flash('exists', 'Product already exists!');
        return redirect()->back();
    }

    function edit($id)
    {
        $product = Terminals::find($id);
        return view('backend.Terminals.edit', compact('product'));
    }

    function update(Request $request, $id)
    {
        $products = Terminals::where('id', $id)->first();
        $input = $request->all();
        $products->fill($input)->save();
        Session::flash('success', 'Your Terminals has been saved!');
        return redirect()->action('Backend\TerminalsController@index');
    }

    function destroy($id)
    {
        Terminals::where('id', $id)->delete();
        return redirect()->action('Backend\TerminalsController@index');
    }
}
