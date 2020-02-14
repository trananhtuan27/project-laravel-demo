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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');

});

Route::get('/shop','ShopController@index');
Route::get('/products/{id}/add-to-cart','CartController@addToCart')->name('addToCart');
Route::get('/cart/','CartController@index')->name('cart.index');



Route::prefix('admin')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/create', 'UserController@create')->name('user.create');
        Route::post('/store', 'UserController@store')->name('user.store');
        Route::get('/{id}/show', 'UserController@show')->name('user.show');
        Route::post('/{id}/update', 'UserController@edit')->name('user.edit');
        Route::get('/{id}/delete', 'UserController@destroy')->name('user.destroy');
        Route::get('/search', 'UserController@search')->name('users.search');
    });
});
Route::prefix('categories')->group(function (){
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/store', 'CategoryController@store')->name('categories.store');
    Route::get('/{id}/show', 'CategoryController@show')->name('categories.show');
    Route::post('/{id}/update', 'CategoryController@edit')->name('categories.edit');
    Route::get('/{id}/delete', 'CategoryController@destroy')->name('categories.destroy');
});

Route::prefix('/product')->group(function (){
    Route::get('/','ProductController@index')->name('product.index');
    Route::get('/create', 'ProductController@create')->name('product.create');
    Route::post('/create', 'ProductController@store')->name('product.store');
});

