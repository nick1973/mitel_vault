<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Access\User\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::content();

//        javascript()->put([
//            'foo' => 'it works!',
//        ]);

        return view('frontend.cart', compact('cart'));
    }

    public function cart($bundle_id)
    {
        //THIS WILL BE FROM THE DATABASE
        $product = [
            'id' => $bundle_id,
            'name' => $bundle_id,
            'qty' => 1,
            'price' => 2500
        ];

        Cart::add($product);
        return redirect()->back();
    }

    public function empty_cart()
    {
        Cart::destroy();
        //return redirect()->back();
        return view('frontend.includes.cart_static');
    }

    public function ax_cart()
    {
        $cart = Cart::content();
        //return view('word.quote', compact('cart'));
        return [
            'quote' => Auth::user()->id,
            'cart' => $cart
        ];
    }

}
