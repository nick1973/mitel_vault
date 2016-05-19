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
    return ['data' => \App\Product::where('category', 'terminals')
        ->orWhere('category', 'analogue_terminals')
        ->orWhere('category', 'dect_terminals')
        ->orWhere('category', 'digital_terminals')
        ->orWhere('category', 'ip_terminals')
        ->get()];
});

Route::get('terminal_upgrades', function () {
    return ['data' => \App\TerminalUpgrade::where('category', 'terminal_upgrades')->get()];
});

Route::get('bt_peripherals', function () {
    return ['data' => \App\BT_Peripherals::get()];
});

Route::get('bundle_set/{bundle_set}', function ($id) {

    $bundle = \App\Mitelbundle::find($id);
    return $bundle->products;
});

//Route::get('bundle_software/{bundle_software}', function ($id) {
//
//    $bundle = \App\Mitelbundle::find($id);
//    return $bundle->products->where('category', 'Software');
//});


Route::get('bundles', function () {
    return ['data' => \App\Mitelbundle::get()];
});

Route::get('product_management/mivb_bundles/{mivb_bundles}/build', ['as' => 'product_management.mivb_bundles.{mivb_bundles}.build', 'uses' => 'Mivb_bundleController@build']);

Route::resource('product_management/terminals', 'TerminalsController');
Route::resource('product_management/terminal_upgrades', 'TerminalUpgradeController');
Route::resource('product_management/hardware', 'HardwareController');
Route::resource('product_management/software', 'SoftwareController');
Route::resource('product_management/mivb_peripherals', 'Mivb_PeripheralsController');
Route::resource('product_management/bt_peripherals', 'BT_PeripheralsController');
Route::resource('product_management/training', 'TrainingController');
Route::resource('product_management/mivb_bundles', 'Mivb_bundleController');
Route::resource('product_management', 'ProductManagementController');
Route::resource('dropdown_management', 'DropdownManagementController');
Route::resource('system_matrix', 'SystemMatrixController');

