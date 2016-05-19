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
use App\TerminalUpgrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TerminalUpgradeController extends Controller
{
    function index()
    {
        return view('backend.terminal_upgrade.index');
    }

    function update(Request $request, $id)
    {
        $products = TerminalUpgrade::where('id', $id)->first();

        if ($request->hasFile('image')) {
            $input = $request->all();

            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads', $fileName);

            array_pull($input, 'image');
            $add_image = array_add($input, 'image', 'uploads/' . $fileName);

            $products->fill($add_image)->save();

        } else {
            $input = $request->except('image');
            $products->fill($input)->save();
        }

        return $this->index();
    }

    function create()
    {
        return view('backend.terminal_upgrade.create');
    }

    function store(Request $request)
    {
        if (!Terminals::where('name', $request->input('name'))->exists() ||
            !Terminals::where('supplier_ref', $request->input('supplier_ref'))->exists() ||
            !Terminals::where('bt_ref', $request->input('bt_ref'))->exists()
        ) {
            $data = $request->input();
            Terminals::create($data);
            return redirect()->action('Backend\TerminalUpgradeController@index');
        }

        Session::flash('exists', 'Product already exists!');
        return redirect()->back();

    }

    function edit($id)
    {
        $product = TerminalUpgrade::find($id);
        return view('backend.terminal_upgrade.edit', compact('product'));
    }


    function destroy($id)
    {
        Terminals::where('id', $id)->delete();
        return redirect()->action('Backend\TerminalUpgradeController@index');
    }
}
