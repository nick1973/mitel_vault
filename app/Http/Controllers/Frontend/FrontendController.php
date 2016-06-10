<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Upgrade;
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
        $lines = Product::where('category', 'lines')->get();
        $sip_lines = Product::where('category', 'sip_lines')->get();
        $lan_switches = Product::where('category', 'lan_switch')->get();

        return view('frontend.index', compact('cart', 'test', 'total', 'ip_terminals', 'analogue_terminals', 'dect_terminals', 'dect_upgrades', 'lines',
            'sip_lines', 'lan_switches'));
    }


    public function cart_post(Request $request)
    {
        $id = $request->input('id');
        $input = $request->all();
        //creates an object to be added to cart
        $obj = [];
        for ($i = 0; $i < count($id); $i++) {
            $obj[$i]["id"] = $input['id'][$i];
            $obj[$i]["name"] = $input['name'][$i];
            $obj[$i]["qty"] = $input['qty'][$i];
            $obj[$i]["price"] = $input['price'][$i];
        }

        foreach ($obj as $elementKey => $element) {
            foreach ($element as $valueKey => $value) {
                if ($valueKey == 'qty' && $value == '0') {
                    //delete this particular object from the $array
                    unset($obj[$elementKey]);
                }
            }
        }
        //add to cart
        Cart::add($obj);
        return $obj;
    }

    public function add_to_cart($obj)
    {
        Cart::add($obj);
    }
}
