<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function () {
    Route::get('permissions', 'PermissionsController@index')->name('permissions');
    Route::get('permissions/create-group', 'PermissionsController@create')->name('create_group');
    Route::post('permissions/store', 'PermissionsController@store');
    Route::get('permissions/build/{id}', 'PermissionsController@buildPermission')->name('build_permission');
//    Route::resource('permissions', 'PermissionsController');
    Route::resource('chart-of-accounts', 'ChartOfAccountsController');
    Route::get('/', 'DashboardController@index')->name('admin_dashboard');
    Route::get('custom', function (){
        return 'custom';
    });
    Route::match(['get', 'post'], 'custom2', function () {
        return 'custom2';
    });
});
Route::get('/', 'DashboardController@index')->name('admin_dashboard');
Route::get('plain', 'DashboardController@index')->name('admin_dashboard');
