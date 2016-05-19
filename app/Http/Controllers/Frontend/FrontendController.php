<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $test = "2";
        $total = Cart::total();
        $cart = Cart::content();

        $ip_terminals = Product::where('category', 'ip_terminals')->where('pbx_type', 'MiVB')->get();
        $analogue_terminals = Product::where('category', 'analogue_terminals')->where('pbx_type', 'MiVB')->get();
        $dect_terminals = Product::where('category', 'dect_terminals')->where('pbx_type', 'MiVB')->get();
        javascript()->put([
            'ip_terminals' => $ip_terminals,
            'analogue_terminals' => $analogue_terminals,
            'dect_terminals' => $dect_terminals
        ]);
        return view('frontend.index', compact('cart', 'test', 'total', 'ip_terminals', 'analogue_terminals', 'dect_terminals'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
