<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function show(Product $product) {
    	$categories = Category::all();
    	return view('products.show', compact('product', 'categories'));
    }

    public function create() {
    	return view('admin.product.create');
    }

    public function store() {
    	request()->validate([
    		'name' => 'required',
    		'content' => 'required',
    		'price' => 'required',
    		'image' => 'required',
    	]);

    	Product::create([
    		'name' => request()->name,
    		'content' => request()->content,
    		'price' => request()->price,
    		'image' => request()->image,
    	]);

    	return redirect()->route('admin.product.create');
    }

    public function edit(Product $product) {
    	return view('admin.product.edit', compact('product'));
    }

    public function update() {

    }

    public function destroy() {
    	
    }
}
