<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        ) {
            $data = $request->input();
            Product::create($data);

            // checking file is valid.
            if (Input::file('image')) {
                $destinationPath = 'uploads'; // upload path
                $fileName = Input::file('image')->getClientOriginalName(); // getting image extension
                //$fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message
                Session::flash('success', 'Upload successfully');
                //return redirect()->back();
                return Redirect::to('index');
            } else {
                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                //return Redirect::to('upload');
                //return redirect()->back();
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
