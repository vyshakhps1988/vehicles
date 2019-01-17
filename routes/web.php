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

/*Route::get('/', function () {
    //return view('welcome');

    return view('home');
});*/

Route::any('/', 'HomeController@showHome')->name('home');
Route::any('admin/addcars', 'Admin\AdminController@showAddCars')->name('addcars');
Route::any('admin/handleAddCars', 'Admin\AdminController@handleAddCars')->name('handleAddCars');
