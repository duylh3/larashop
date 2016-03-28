<?php
/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | This route group applies the "web" middleware group to every route
 * | it contains. The "web" middleware group is defined in your HTTP
 * | kernel and includes session state, CSRF protection, and more.
 * |
 */

Route::group ( [ 
		'middleware' => [ 
				'web' 
		] 
], function () {
	//
} );

// Authentication routes...
Route::get ( 'auth/login', 'FrontController@login' );
Route::post ( 'auth/login', 'FrontController@authenticate' );
Route::get ( 'auth/logout', 'FrontController@logout' );

// Registration routes...
Route::post ( '/register', 'FrontController@register' );
Route::get('/checkout', [
		'middleware' => 'auth',
		'uses' => 'FrontController@checkout'
]);

Route::get ( '/', 'FrontController@index' );
Route::get ( '/products', 'FrontController@products' );
Route::get ( '/products/details/{id}', 'FrontController@product_details' );
Route::get ( '/products/categories/{name}', 'FrontController@product_categories' );
Route::get ( '/products/brands/{name}/{category?}', 'FrontController@product_brands' );
Route::get ( '/blog', 'FrontController@blog' );
Route::get ( '/blog/post/{id}', 'FrontController@blog_post' );
Route::get ( '/contact-us', 'FrontController@contact_us' );
Route::get ( '/login', 'FrontController@login' );
Route::get ( '/logout', 'FrontController@logout' );
Route::get ( '/cart', 'FrontController@cart' );
Route::get ( '/checkout', 'FrontController@checkout' );
Route::get ( '/search/{query}', 'FrontController@search' );


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::get('/insert',function(){
    App\Http\Models\Category::create(array('name' => 'Music1'));
    return 'category added';
});

Route::get('/read',function(){
    $categories = new App\Http\Models\Category();
   $data =  $categories->all(array('name','id'));

    foreach ($data as $item) {
        echo $item->id . ' ' . $item->name;
    }
});