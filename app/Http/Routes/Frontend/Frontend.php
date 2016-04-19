<?php

/**
 * Frontend Controllers
 */



//Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

Route::get('bundle_list/{analogue_lines}/{analogue_extensions}', function($analogue_lines,$analogue_extensions){

    //return ["bundle" => App\SystemMatrix::find(2)];
    //if($analogue_lines>0){
    return ["bundle" => App\SystemMatrix::where('analogue_lines', $analogue_lines)
        //->whereIn('analogue_extensions', '>=', $analogue_extensions)
                                            ->get()];
    //};

});

Route::post('bundle_post', function(){

    $result =  [
        'analogue_lines'  =>  $_POST['analogue_lines'],
        'analogue_extensions'  =>  $_POST['analogue_extensions']
    ];

    return $result;

});

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'SelectionController@index')->name('frontend.index');
    Route::resource('mitel_bundle', 'Mitel_BundleController');
    Route::resource('selection', 'SelectionController');

    Route::get('mivb/new', 'FrontendController@index');

    Route::resource('cart', 'CartController');
    Route::get('cart/{cart}', 'CartController@cart');
    Route::get('empty_cart', 'CartController@empty_cart');
    Route::get('ax_cart', 'CartController@ax_cart');

    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');

    });
});