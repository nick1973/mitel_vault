<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Upgrade;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProductManagementController extends Controller
{
    function index($page = 'hardware')
    {
        if ($page == 'ip_terminals' || $page == 'analogue_terminals' || $page == 'dect_terminals' || $page == 'digital_terminals') {
            $page = 'terminals';
        }
        if ($page == 'lines') {
            $page = 'hardware';
        }
        //return view('backend.' . $page . '.index');
        return redirect('admin/product_management/' . $page);
    }

    /**
     * @param Request $request
     * @return array|string
     */
    function store(Request $request)
    {

        if (!Product::where('item_name', $request->input('item_name'))->exists() ||
            !Product::where('supplier_ref', $request->input('supplier_ref'))->exists() ||
            !Product::where('bt_ref', $request->input('bt_ref'))->exists()
        ) {
            $data = $request->input();
            if (!Input::file('image')) {
                Product::create($data);
            } else {
                $destinationPath = 'uploads'; // upload path
                $fileName = Input::file('image')->getClientOriginalName(); // getting image extension
                Input::file('image')->move($destinationPath, $fileName);
                $new_data = array_add($data, 'image', $destinationPath . '/' . $fileName);
                Product::create($new_data);
            }
            $page = strtolower($request->input('category'));
            return $this->index($page);
        }
        Session::flash('exists', 'Product already exists!');
        return redirect()->back();
    }

    /**
     *
     */
    function create()
    {
        return view('backend.products.create');
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function update(Request $request, $id)
    {
        $products = Product::where('id', $id)->first();

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

        if ($request->input('upgrades_id') == null) {
            $upgrades_id = [];
        } else {
            $upgrades_id = $request->input('upgrades_id');
        }
        $products->upgrades()->sync($upgrades_id);

        $page = strtolower($request->input('category'));
        return $this->index($page);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->action('Backend\ProductManagementController@index');
    }

    function edit($id)
    {
        $product = Product::find($id);
        $upgrades = $product->upgrades;
        $terminal_upgrades = Upgrade::get();
        javascript()->put(['terms' => $terminal_upgrades]);


        return view('backend.products.edit', compact('product', 'terminal_upgrades', 'upgrades', 'terms'));
    }

    /**
     * @param $id
     */
    function show($id)
    {

    }


}
