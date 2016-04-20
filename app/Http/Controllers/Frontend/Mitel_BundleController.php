<?php

namespace App\Http\Controllers\Frontend;

use App\SystemMatrix;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Mitel_BundleController extends Controller
{
    public function index($lines=null, $extensions=null)
    {
        $cart = Cart::content();
        javascript()->put([
            'cart' => $cart,
        ]);

        return view('frontend.mitel_bundle.index', compact('lines','extensions'));
    }

    public function bundle($lines, $extensions)
    {
        $result = ["bundle" => SystemMatrix::where('analogue_lines', $lines)
            ->orWhere('bri_lines', $lines)
            ->get()];
        return $result;
    }

    public function store(Request $request)
    {
        $lines = $request->input('lines');
        $extensions = $request->input('extensions');

        return $this->index($lines, $extensions);
    }

    function find_bundle(Request $request)
    {

    }

}
