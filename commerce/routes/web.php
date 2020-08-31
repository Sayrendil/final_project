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

	Route::get('/show/{product}', 'ProductController@show')->name('product.show');

	

Auth::routes();

