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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


Route::prefix('wishlist')->group(function(){
  Route::post('create', 'WishlistController@store');
  Route::get('my_wishlists', 'WishlistController@index');
  Route::get('show', 'WishlistController@show');
  Route::put('update', 'WishlistController@update');
  Route::delete('delete', 'WishlistController@destroy');
});






