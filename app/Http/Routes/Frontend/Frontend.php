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


Route::post('hardware_post', 'FrontendController@cart_post');
//Route::post('hardware_post', function(){
////    $result =  [
////        'id' => $_POST['id'],
////        'name' => $_POST['name'],
////        'qty' => $_POST['qty'],
////        'price' => $_POST['price']
////    ];
////    return $result;
//
//});

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