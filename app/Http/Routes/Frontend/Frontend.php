<?php

/**
 * Frontend Controllers
 */

Route::get('/', 'FrontendController@index')->name('frontend.index');

Route::resource('cart', 'CartController');
Route::get('cart/{cart}', 'CartController@cart');
Route::get('empty_cart', 'CartController@empty_cart');
Route::get('ax_cart', 'CartController@ax_cart');



//Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

//Route::get('word', function(){
//    return view('word.helloWorld');
//});

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::resource('mitel_bundle', 'Mitel_BundleController');
    Route::resource('selection', 'SelectionController');

    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');

    });
});