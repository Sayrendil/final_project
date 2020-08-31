<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function show() {

    }

    public function create() {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    public function store() {
        request()->validate([
            'name' => 'required',
        ]);

        Category::create([
            'name' => request()->name,
            'parent_id' => request()->parent_id,
        ]);

        return redirect()->route('index');
    }
}
