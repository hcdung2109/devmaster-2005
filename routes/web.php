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

// Route::resource('roles', 'RoleController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
