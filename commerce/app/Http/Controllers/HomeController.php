<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }

    public function action() {
        return view('action');
    }

    public function shop() {
        $categories = Category::all();
        $products = Product::all();
        return view('shop', compact('categories', 'products'));
    }

    public function contact() {
        return view('contact');
    }
}
