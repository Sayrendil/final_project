<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
	public function __construct() {
        $this->middleware('auth');
    }

    public function show(Product $product) {
		$productItem = Product::with('images')->get();
    	return view('products.show', compact('product'));
	}
	
	public function index() {
		$products = Product::all();
		return view('admin.products.table', compact('products'));
	}

    public function create() {
    	return view('admin.products.create');
    }

    public function store() {
    	request()->validate([
    		'name' => 'required',
    		'content' => 'required',
			'price' => 'required',
			'category_id' => 'required'
    	]);

    	$product = Product::create([
    		'name' => request()->name,
    		'content' => request()->content,
			'price' => request()->price,
			'category_id' => request()->category_id,
		]);
		$product->categories()->attach(request()->category);

    	return redirect()->route('product.index');
    }

    public function edit(Product $product) {
    	return view('admin.products.edit', compact('product'));
    }

    public function update(Product $product) {
		$product->name = request()->name;
		$product->content = request()->content;
		$product->price = request()->price;
        $product->save();

        return redirect(route('product.index', $product));
    }

    public function destroy(Product $product) {
		$product->delete();
		return redirect()->route('product.index');
    }
}
