<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductManagementController extends Controller
{
    function index($page = 'hardware')
    {
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
        )

        {
            $data = $request->input();
            Product::create($data);
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
        $input = $request->all();
        $products->fill($input)->save();
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
        return view('backend.products.edit', compact('product'));
    }

    /**
     * @param $id
     */
    function show($id)
    {

    }


}
