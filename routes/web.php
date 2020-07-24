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
// Home
Route::get('/', function () {
    return view('welcome');
});

// Admin
Route::get('/admin', 'AdminController@index')->name('dashboard');

Route::resource('roles', 'RoleController');


// Gom nhóm route trang admin . thêm tiền tố admin cho mỗi url
Route::group(['prefix' => 'admin'], function () {
    Route::resource('banner', 'BannerController');
    Route::resource('brand', 'BrandController'); // Thuong Hieu
    Route::resource('vendor', 'VendorController'); // Nhà cung cấp
    Route::resource('category', 'CategoryController'); // Nhà cung cấp
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
