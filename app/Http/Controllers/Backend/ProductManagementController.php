<?php

namespace App\Http\Controllers\Backend;

use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductManagementController extends Controller
{
    function index()
    {
        return view('backend.products.index');
    }

    /**
     * @param Request $request
     * @return array|string
     */
    function store(Request $request)
    {
        if(!Products::where('name', $request->input('name'))->exists() ||
         !Products::where('vendor_ref', $request->input('vendor_ref'))->exists() ||
            !Products::where('bt_ref', $request->input('bt_ref'))->exists())

        {
            $data = $request->input();
            Products::create($data);
            return redirect()->action('Backend\ProductManagementController@index');
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

    function update(Request $request, $id)
    {
        $products = Products::where('id', $id)->first();
        $input = $request->all();
        $products->fill($input)->save();
        return redirect()->action('Backend\ProductManagementController@index');
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function destroy($id)
    {
        Products::where('id', $id)->delete();
        return redirect()->action('Backend\ProductManagementController@index');
    }

    function edit($id)
    {
        $product = Products::find($id);
        return view('backend.products.edit', compact('product'));
    }

    /**
     * @param $id
     */
    function show($id)
    {

    }


}
