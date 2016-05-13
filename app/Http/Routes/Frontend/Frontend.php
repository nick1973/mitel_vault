<?php

/**
 * Frontend Controllers
 */



//Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

Route::get('bundle_list/{lines}/{analogue_extensions}', function ($lines, $analogue_extensions) {
    $bundle = App\Mitelbundle::find($lines);
    $product = [
        'id' => $bundle->id,
        'name' => $bundle->name,
        'qty' => 1,
        'price' => $bundle->btbuy
    ];
    Gloudemans\Shoppingcart\Facades\Cart::add($product);
    return ["bundle" => App\Mitelbundle::where('analogue_lines', $lines)
        ->orWhere('bri_lines', $lines)
        ->get()];
});

Route::get('cart_reload', function () {
    return view('frontend.includes.cart_static');
});

Route::post('bundle_post', function(){
    $result =  [
        'analogue_lines'  =>  $_POST['analogue_lines'],
        'analogue_extensions' => $_POST['users']
    ];
    return $result;
});

Route::get('hardware_flat', function () {
    return \App\Product::where('category', 'hardware')->get();
});

Route::get('software_flat', function () {
    return \App\Product::where('category', 'software')->get();
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