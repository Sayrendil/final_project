<?php

use Illuminate\Support\Facades\Route;

	Route::get('/', function () {
	    return redirect(route('index'));
	});

	Route::get('/', 'HomeController@index')->name('index');
	Route::get('/action', 'HomeController@action')->name('action');
	Route::get('/shop', 'HomeController@shop')->name('shop');
	Route::get('/contact', 'HomeController@contact')->name('contact');

	Route::get('/admin/category/create', 'CategoryController@create')->name('category.create');
	Route::post('/admin/category/store', 'CategoryController@store')->name('category.store');
	Route::get('/admin/category/', 'CategoryController@index')->name('category.index');
	Route::get('/admin/category/edit/{category}', 'CategoryController@edit')->name('category.edit');
	Route::put('/admin/category/update/{category}', 'CategoryController@update')->name('category.update');
	Route::delete('/admin/category/{category}', 'CategoryController@destroy')->name('category.destroy');

	Route::get('/admin/show/{product}', 'ProductController@show')->name('product.show');
	Route::get('/admin/products', 'ProductController@index')->name('product.index');
	Route::get('/admin/products/create', 'ProductController@create')->name('product.create');
	Route::post('/admin/products/store', 'ProductController@store')->name('product.store');
	Route::get('/admin/products/{product}', 'ProductController@edit')->name('product.edit');
	Route::put('/admin/products/{product}', 'ProductController@update')->name('product.update');
	Route::delete('/admin/products/{product}', 'ProductController@destroy')->name('product.destroy');

	Route::post('/store/image', 'ImageController@store')->name('productImg.store');

	Route::get('/admin/post/table', 'PostController@index')->name('post.index');
	Route::get('/admin/post', 'PostController@create')->name('post.create');
	Route::post('/admin/post', 'PostController@store')->name('post.store');
	Route::get('/admin/post/{post}', 'PostController@edit')->name('post.edit');
	Route::put('/admin/post/update/{post}', 'PostController@update')->name('post.update');
	Route::delete('/admin/post/{post}', 'PostController@destroy')->name('post.destroy');

	

Auth::routes();

