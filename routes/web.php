<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/menu', 'App\Http\Controllers\MenuController@index')->name("menu.index");

Route::get('/blog', 'App\Http\Controllers\BlogController@index')->name("blog.index");

Route::get('/gioithieu', 'App\Http\Controllers\GioiThieuController@index')->name("gioithieu.index");

Route::get('/lienhe', 'App\Http\Controllers\LienHeController@index')->name("lienhe.index");

Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
Route::get('/admin/products/add', 'App\Http\Controllers\Admin\AdminProductController@add')->name("admin.product.add");
Route::post("/admin/products/store", "App\Http\Controllers\Admin\AdminProductController@store")->name("admin.product.store");

Route::get('/products', 'App\Http\Controllers\MenuController@index')->name("menu.index");
Route::get('/products/{id}', 'App\Http\Controllers\MenuController@show')->name("menu.show");

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::get('/admin/products/add', 'App\Http\Controllers\Admin\AdminProductController@add')->name("admin.product.add");
    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
});

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
    Route::get('/my-account/orders2', 'App\Http\Controllers\MyAccountController@orders2')->name("myaccount.orders2");
});
