<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect(route('index'));
});

Route::prefix('home')->group(function () {
	Route::get('/', 'HomeController@index')->name('index');
	Route::get('/action', 'HomeController@action')->name('action');
	Route::get('/shop', 'HomeController@shop')->name('shop');
	Route::get('/contact', 'HomeController@contact')->name('contact');
	Route::get('/add-product/{productId}', 'HomeController@addProductToCart')->name('addProductToCart');
});

Route::prefix('cart')->group(function () {
	Route::get('/add-to-cart/{id}', 'CartController@getAddToCart')->name('getAddToCart');
	Route::get('/check', 'CartController@checkCart')->name('checkCart');
	Route::get('/', 'CartController@cartIndex')->name('cartIndex');
});

Route::prefix('admin/category')->group(function () {
	Route::get('/create', 'CategoryController@create')->name('category.create');
	Route::post('/store', 'CategoryController@store')->name('category.store');
	Route::get('/table', 'CategoryController@index')->name('category.index');
	Route::get('/edit/{category}', 'CategoryController@edit')->name('category.edit');
	Route::put('/update/{category}', 'CategoryController@update')->name('category.update');
	Route::delete('/{category}', 'CategoryController@destroy')->name('category.destroy');
});

Route::prefix('admin/products')->group(function () {
	Route::get('/show/{product}', 'ProductController@show')->name('product.show');
	Route::get('/table', 'ProductController@index')->name('product.index');
	Route::get('/create', 'ProductController@create')->name('product.create');
	Route::post('/store', 'ProductController@store')->name('product.store');
	Route::get('/{product}', 'ProductController@edit')->name('product.edit');
	Route::put('/{product}', 'ProductController@update')->name('product.update');
	Route::delete('/{product}', 'ProductController@destroy')->name('product.destroy');
});

Route::prefix('admin/post')->group(function () {
	Route::get('/table', 'PostController@index')->name('post.index');
	Route::get('/create', 'PostController@create')->name('post.create');
	Route::post('/store', 'PostController@store')->name('post.store');
	Route::get('/{post}', 'PostController@edit')->name('post.edit');
	Route::put('/update/{post}', 'PostController@update')->name('post.update');
	Route::delete('/{post}', 'PostController@destroy')->name('post.destroy');
	Route::post('/store/image', 'ImageController@store')->name('productImg.store');
});
	
	Auth::routes();	

