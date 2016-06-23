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
        $user_license = Product::where('category', 'user_license')->get();
        $feature_license = Product::where('category', 'feature_license')->get();
        $base_app = Product::where('category', 'base_app')->get();
        $sip_proxy = Product::where('category', 'sip_proxy')->get();
        $web_proxy = Product::where('category', 'web_proxy')->get();
        $teleworker = Product::where('category', 'teleworker')->get();
        $peripherals_moh_playback_unit = Product::where('category', 'peripherals_moh_playback_unit')->get();
        $peripherals_moh_unit_upgrades = Product::where('category', 'peripherals_moh_unit_upgrades')->get();
        $peripherals_moh_managed_services = Product::where('category', 'peripherals_moh_managed_services')->get();
        $peripherals_moh_copyright_managed_services = Product::where('category', 'peripherals_moh_copyright_managed_services')->get();
        $peripherals_system_message = Product::where('category', 'peripherals_system_message')->get();
        $peripherals_on_hold_message = Product::where('category', 'peripherals_on_hold_message')->get();
        $peripherals_de_analogue_extension_systems = Product::where('category', 'peripherals_de_analogue_extension_systems')->get();
        $peripherals_de_sip_extension_systems = Product::where('category', 'peripherals_de_sip_extension_systems')->get();
        $peripherals_uc_outlook = Product::where('category', 'peripherals_uc_outlook')->get();
        $peripherals_uc_attendant_console = Product::where('category', 'peripherals_uc_attendant_console')->get();
        $peripherals_uc_crm = Product::where('category', 'peripherals_uc_crm')->get();
        $peripherals_uc_status_stick = Product::where('category', 'peripherals_uc_status_stick')->get();
        $peripherals_headset = Product::where('category', 'peripherals_headset')->get();
        $peripherals_vr_core_product = Product::where('category', 'peripherals_vr_core_product')->get();
        $peripherals_vr_lite_upgrade_options = Product::where('category', 'peripherals_vr_lite_upgrade_options')->get();
        $peripherals_vr_ent_upgrade_options = Product::where('category', 'peripherals_vr_ent_upgrade_options')->get();
        $peripherals_av = Product::where('category', 'peripherals_av')->get();
        $training_on_site = Product::where('category', 'training_on_site')->get();
        $training_web = Product::where('category', 'training_web')->get();
        $support_options = Product::where('category', 'support_options')->get();

        return view('frontend.index', compact('cart', 'test', 'total', 'ip_terminals', 'analogue_terminals', 'dect_terminals', 'dect_upgrades', 'lines',
            'sip_lines', 'lan_switches', 'user_license', 'feature_license', 'base_app', 'sip_proxy', 'web_proxy', 'teleworker', 'peripherals_moh_playback_unit',
            'peripherals_moh_unit_upgrades', 'peripherals_moh_managed_services', 'peripherals_moh_copyright_managed_services', 'peripherals_system_message',
            'peripherals_on_hold_message', 'peripherals_de_analogue_extension_systems', 'peripherals_de_sip_extension_systems', 'peripherals_uc_outlook',
            'peripherals_uc_crm', 'peripherals_uc_attendant_console', 'peripherals_uc_status_stick', 'peripherals_headset', 'peripherals_vr_core_product',
            'peripherals_vr_lite_upgrade_options', 'peripherals_vr_ent_upgrade_options', 'peripherals_av', 'training_on_site', 'training_web', 'support_options'));
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
