<?php

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
//Route::get('product_management', 'ProductManagementController@index')->name('admin.product_management');

Route::get('product_management/test', function()
{
    return ['data' => \App\Products::get()];
});
Route::resource('product_management/terminals', 'TerminalsController');
Route::resource('product_management/peripherals', 'PeripheralsController');
Route::resource('product_management/training', 'TrainingController');
Route::resource('product_management', 'ProductManagementController');
Route::resource('dropdown_management', 'DropdownManagementController');
Route::resource('system_matrix', 'SystemMatrixController');

