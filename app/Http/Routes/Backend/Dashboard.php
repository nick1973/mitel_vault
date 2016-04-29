<?php

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
//Route::get('product_management', 'ProductManagementController@index')->name('admin.product_management');
Route::get('product_management/test', function()
{
    return ['data' => \App\Products::get()];
});

Route::get('hardware', function () {
    return ['data' => \App\Product::where('category', 'hardware')->get()];
});

Route::get('software', function () {
    return ['data' => \App\Product::where('category', 'software')->get()];
});


Route::get('mivb_peripherals', function () {
    return ['data' => \App\Product::where('category', 'mivb_peripherals')->get()];
});

Route::get('terminals', function () {
    return ['data' => \App\Product::where('category', 'terminals')->get()];
});

Route::get('bt_peripherals', function () {
    return ['data' => \App\BT_Peripherals::get()];
});

Route::get('bundle_set', function () {
    $test = file_get_contents('test2.json');
    $json = json_decode($test, true);
    return $json;
});

Route::resource('product_management/terminals', 'TerminalsController');
Route::resource('product_management/hardware', 'HardwareController');
Route::resource('product_management/software', 'SoftwareController');
Route::resource('product_management/mivb_peripherals', 'Mivb_PeripheralsController');
Route::resource('product_management/bt_peripherals', 'BT_PeripheralsController');
Route::resource('product_management/training', 'TrainingController');
Route::resource('mivb_bundles', 'Mivb_bundleController');
Route::resource('product_management', 'ProductManagementController');
Route::resource('dropdown_management', 'DropdownManagementController');
Route::resource('system_matrix', 'SystemMatrixController');

