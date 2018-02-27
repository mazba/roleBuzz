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
Route::prefix('admin')->middleware(['RoleBuzz'])->group(function () {
    Route::get('permissions', 'Admin\PermissionsController@index')->name('permissions');
    Route::get('permissions/create-group', 'Admin\PermissionsController@create')->name('create_group');
    Route::post('permissions/store', 'Admin\PermissionsController@store');
    Route::get('permissions/build/{id}', 'Admin\PermissionsController@buildPermission')->name('build_permission');
    Route::post('permissions/set/{id}', 'Admin\PermissionsController@setPermission');
//    Route::resource('permissions', 'PermissionsController');
    Route::resource('chart-of-accounts', 'Admin\ChartOfAccountsController');
    Route::get('/', 'Admin\DashboardController@index')->name('admin_dashboard');
    Route::get('custom', function (){
        return 'custom';
    });
    Route::match(['get', 'post'], 'custom2', function () {
        return 'custom2';
    });
    Route::get('/', 'Admin\DashboardController@index')->name('admin_dashboard');
});

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout');
