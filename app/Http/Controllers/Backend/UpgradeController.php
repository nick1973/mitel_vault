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
use App\Upgrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class UpgradeController extends Controller
{
    function index()
    {
        return view('backend.upgrade.index');
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
        return view('backend.upgrade.create');
    }

    function store(Request $request)
    {
        if (!Upgrade::where('item_name', $request->input('item_name'))->exists() ||
            !Upgrade::where('supplier_ref', $request->input('supplier_ref'))->exists() ||
            !Upgrade::where('bt_ref', $request->input('bt_ref'))->exists()
        ) {
            $data = $request->input();
            if (!Input::file('image')) {
                Upgrade::create($data);
            } else {
                $destinationPath = 'uploads'; // upload path
                $fileName = Input::file('image')->getClientOriginalName(); // getting image extension
                Input::file('image')->move($destinationPath, $fileName);
                $new_data = array_add($data, 'image', $destinationPath . '/' . $fileName);
                Upgrade::create($new_data);
            }

            return $this->index();
        }
        Session::flash('exists', 'Product already exists!');
        return redirect()->back();
    }

    function edit($id)
    {
        $product = TerminalUpgrade::find($id);
        return view('backend.upgrade.edit', compact('product'));
    }


    function destroy($id)
    {
        Terminals::where('id', $id)->delete();
        return redirect()->action('Backend\UpgradeController@index');
    }
}
