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
Route::get('/', 'ShopController@index')->name('shop');
Route::get('/danh-muc', 'ShopController@category')->name('shop.category');
Route::get('/chi-tiet-sp', 'ShopController@detailProduct')->name('shop.detail-product');
Route::get('/ds-bai-viet', 'ShopController@articles')->name('shop.articles');
Route::get('/chi-tiet-bai-viet', 'ShopController@detailArticle')->name('shop.detail-article');
Route::get('/lien-he', 'ShopController@contact')->name('shop.contact');

// Admin
Route::get('/admin', 'AdminController@index')->name('dashboard');

Route::resource('roles', 'RoleController');


// Gom nhóm route trang admin . thêm tiền tố admin cho mỗi url
Route::group(['prefix' => 'admin', 'as' => 'admin.' ], function () {
    Route::resource('banner', 'BannerController');
    Route::resource('brand', 'BrandController'); // Thuong Hieu
    Route::resource('vendor', 'VendorController'); // Nhà cung cấp
    Route::resource('category', 'CategoryController'); // Nhà cung cấp
    Route::resource('product', 'ProductController'); // San Pham
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
