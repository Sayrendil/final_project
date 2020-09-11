<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Post;
use Session;
use App\Cart;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function action() {
        $posts = Post::all();
        return view('action', compact('posts'));
    }

    public function shop() {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $products = Product::with('images')->get();


        return view('shop', compact('categories', 'products'));
    }

    public function contact() {
        return view('contact');
    }
    
}
