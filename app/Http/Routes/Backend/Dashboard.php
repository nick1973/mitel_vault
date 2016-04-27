<?php

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
//Route::get('product_management', 'ProductManagementController@index')->name('admin.product_management');
Route::get('product_management/test', function()
{
    return ['data' => \App\Products::get()];
});

Route::get('hardware', function () {
    return ['data' => \App\Hardware::get()];
});

Route::get('software', function () {
    return ['data' => \App\Software::get()];
});

Route::get('mivb_peripherals', function () {
    return ['data' => \App\Mivb_Peripherals::get()];
});

Route::get('terminals', function () {
    return ['data' => \App\Terminals::get()];
});

Route::resource('product_management/terminals', 'TerminalsController');
Route::resource('product_management/hardware', 'HardwareController');
Route::resource('product_management/software', 'SoftwareController');
Route::resource('product_management/mivb_peripherals', 'Mivb_PeripheralsController');
Route::resource('product_management/peripherals', 'PeripheralsController');
Route::resource('product_management/training', 'TrainingController');
Route::resource('product_management', 'ProductManagementController');
Route::resource('dropdown_management', 'DropdownManagementController');
Route::resource('system_matrix', 'SystemMatrixController');

