<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('/','FrontController@index');
Route::get('/products','FrontController@products');
Route::get('/products/details/{id}','FrontController@product_details');
Route::get('/products/categories/{name}','FrontController@product_categories');
Route::get('/products/brands/{name}/{category?}','FrontController@product_brands');
Route::get('/blog','FrontController@blog');
Route::get('/blog/post/{id}','FrontController@blog_post');
Route::get('/contact-us','FrontController@contact_us');
Route::get('/login','FrontController@login');
Route::get('/logout','FrontController@logout');
Route::get('/cart','FrontController@cart');
Route::get('/checkout','FrontController@checkout');
Route::get('/search/{query}','FrontController@search');

Route::get('blade', function () {
    $drinks = array('Vodka','Gin','Brandy');
    return view('page',array('name' => 'The Raven','day' => 'Friday','drinks' => $drinks));
});
