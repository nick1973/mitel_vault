<?php

/**
 * Frontend Controllers
 */

Route::get('bundle_list/{line_type}/{users}/{lan}',
    function ($line_type, $users, $lan) {
        $product = [];
        if ($users > 0) {
            if ($lan == 'no') {
                $users = 0;
                $bundles = App\Mitelbundle::where('line_type', $line_type)
                    ->where('lan_ports', $users)
                    ->get();
            } else {
                if ($users > 0 && $users <= 16) {
                    $users = 16;
                } else if ($users <= 24) {
                    $users = 24;
                } else {
                    $users = 48;
                }
                $bundles = App\Mitelbundle::where('line_type', $line_type)
                    ->where('lan_ports', $users)
                    ->get();
            }

            foreach ($bundles as $bundle) {
                $product = [
                    'id' => $bundle->id,
                    'name' => $bundle->name,
                    'qty' => $bundle->qty,
                    'price' => $bundle->btbuy
                ];
            }
            Gloudemans\Shoppingcart\Facades\Cart::destroy();
            if (isset($bundles)) {
                Gloudemans\Shoppingcart\Facades\Cart::add($product);
                return ["bundle" => $bundle,
                    "bundle_products" => $bundle->products,
                    "bundle_upgrades" => $bundle->upgrades
                ];
            }
        }
        return $product;
});

Route::get('cart_reload', function () {
    return view('frontend.includes.cart_static');
});

Route::post('bundle_post', function(){
    $result =  [
        'line_type' => $_POST['line_type'],
        'users' => $_POST['users'],
        'lan' => $_POST['lan']
    ];
    return $result;
});

Route::post('install_post', function () {
    $standard_install = $_POST['standard_install'];
    $express_install = $_POST['express_install'];

    if ($standard_install == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->standard_install;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('1000si', 'Standard Install', 1, $total);
    }
    if ($express_install == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->express_install;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('1000ei', 'Express Install', 1, $total);
    }

});

Route::post('maint_post', function () {
    $standard_care = $_POST['standard_care'];
    $total_care = $_POST['total_care'];
    $prompt_care = $_POST['prompt_care'];
    $critical_care = $_POST['critical_care'];
    $month_12 = $_POST['12_month'];
    $month_24 = $_POST['24_month'];
    $month_36 = $_POST['36_month'];
    $month_60 = $_POST['60_month'];

    if ($standard_care == "Yes" && $month_12 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->one_yr_standard_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('12standcare', '12 Month Standard Care', 1, $total);
    }

    if ($standard_care == "Yes" && $month_24 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->one_yr_standard_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('24standcare', '24 Month Standard Care', 1, $total * 2);
    }

    if ($standard_care == "Yes" && $month_36 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->three_yr_standard_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('36standcare', '36 Month Standard Care', 1, $total);
    }

    if ($standard_care == "Yes" && $month_60 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->five_yr_standard_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('60standcare', '60 Month Standard Care', 1, $total);
    }

    ///////////////////////TOTAL CARE///////////////////////////
    if ($total_care == "Yes" && $month_12 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->one_yr_total_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('12totcare', '12 Month Total Care', 1, $total);
    }

    if ($total_care == "Yes" && $month_24 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->one_yr_total_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('24totcare', '24 Month Total Care', 1, $total * 2);
    }

    if ($total_care == "Yes" && $month_36 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->three_yr_total_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('36totcare', '36 Month Total Care', 1, $total);
    }

    if ($total_care == "Yes" && $month_60 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->five_yr_total_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('60totcare', '60 Month Total Care', 1, $total);
    }

    ///////////////////////PROMPT CARE///////////////////////////
    if ($prompt_care == "Yes" && $month_12 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->one_yr_prompt_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('12promptcare', '12 Month Prompt Care', 1, $total);
    }

    if ($prompt_care == "Yes" && $month_24 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->one_yr_prompt_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('24promptcare', '24 Month Prompt Care', 1, $total * 2);
    }

    if ($prompt_care == "Yes" && $month_36 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->three_yr_total_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('36promptcare', '36 Month Prompt Care', 1, $total);
    }

    if ($prompt_care == "Yes" && $month_60 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->five_yr_prompt_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('60promptcare', '60 Month Prompt Care', 1, $total);
    }

    ///////////////////////CRITICAL CARE///////////////////////////
    if ($critical_care == "Yes" && $month_12 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->one_yr_critical_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('12criticalcare', '12 Month Critical Care', 1, $total);
    }

    if ($critical_care == "Yes" && $month_24 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->one_yr_critical_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('24criticalcare', '24 Month Critical Care', 1, $total * 2);
    }

    if ($critical_care == "Yes" && $month_36 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->three_yr_critical_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('36criticalcare', '36 Month Critical Care', 1, $total);
    }

    if ($critical_care == "Yes" && $month_60 == "Yes") {
        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
        $total = 0;
        foreach ($cart as $res) {
            $products = \App\Product::where('id', $res->id)->get();
            foreach ($products as $product) {
                $total += $product->five_yr_critical_care;
            }
        }
        Gloudemans\Shoppingcart\Facades\Cart::add('60criticalcare', '60 Month Critical Care', 1, $total);
    }
});

Route::get('cart_items', function () {
    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
    if (count($cart) > 0) {
        foreach ($cart as $res) {
            if ($res->name != "MiVoice 16 USER CX (BRI)" || $res->name != "MiVoice 16 USER CX (PRI)" || $res->name != "MiVoice 16 USER CX (SIP)"
                || $res->name != "MiVoice 16 USER CX (BRI) 24 Port LAN" || $res->name != "MiVoice 16 USER CX (PRI) 24 Port LAN"
                || $res->name != "12 Month Standard Care" || $res->name != "24 Month Standard Care" || $res->name != "36 Month Standard Care" || $res->name != "60 Month Standard Care"
                || $res->name != "12 Month Total Care" || $res->name != "24 Month Total Care" || $res->name != "36 Month Total Care" || $res->name != "60 Month Total Care"
                || $res->name != "12 Month Prompt Care" || $res->name != "24 Month Prompt Care" || $res->name != "36 Month Prompt Care" || $res->name != "60 Month Prompt Care"
                || $res->name != "12 Month Critical Care" || $res->name != "24 Month Critical Care" || $res->name != "36 Month Critical Care" || $res->name != "60 Month Critical Care"
            ) {
                $products[] = \App\Product::where('id', $res->id)->get();
            }
        }
        $array = array_flatten($products);
        return ["cart_items" => $array];
    }
    return ["cart_items" => ""];
});

Route::post('server_post', function () {
    $result = [
        'channel_qty' => $_POST['channel_qty'],
        'form_factor' => $_POST['form_factor'],
        'raid' => $_POST['raid']
    ];
    return $result;
});

Route::get('server_list/{channel_qty}/{form_factor}/{raid}',
    function ($channel_qty, $form_factor, $raid) {
        if ($channel_qty > 0 && $channel_qty <= 50) {
            $channel_qty = 50;
        } else if ($channel_qty <= 250) {
            $channel_qty = 250;
        } else {
            $channel_qty = 500;
        }
        $server = \App\Product::where('category', 'server')
            ->where('form_factor', $form_factor)
            ->where('raid', $raid)
            ->where('max_server_users', $channel_qty)
            ->get();

        return ["server" => $server];
    });

Route::get('cart_content', function () {
    $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
    return $cart;
});

Route::post('hardware_post', 'FrontendController@cart_post');

Route::get('hardware_flat', function () {
    return \App\Product::where('category', 'hardware')
        //->orWhere('category', 'lines')
        ->get();
});

Route::get('software_flat', function () {
    return \App\Product::where('category', 'software')->get();
});

Route::get('upgrades_flat', function () {
    return \App\Upgrade::where('category', 'terminal_upgrades')->get();
});


Route::post('post_terminals', function () {
    $result = [
        'terminals' => $_POST['terminals']
    ];
    return $result;
});
/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'SelectionController@index')->name('frontend.index');
    Route::get('bundle_list/{lines}/{extensions}', 'Mitel_BundleController@bundle');
    Route::resource('mitel_bundle', 'Mitel_BundleController');
    Route::resource('selection', 'SelectionController');

    Route::get('mivb/new', 'FrontendController@index');

    Route::resource('cart', 'CartController');
    Route::get('cart/{cart}', 'CartController@cart');
    Route::get('empty_cart', 'CartController@empty_cart');
    Route::get('ax_cart', 'CartController@ax_cart');
    Route::get('remove_bundle_cart/{remove_bundle_cart}', 'CartController@remove_bundle_cart');

    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');

    });
});