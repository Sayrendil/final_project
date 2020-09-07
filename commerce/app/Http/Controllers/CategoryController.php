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
    public function index() {
        $categories = Category::all();
        return view('admin.category.table', compact('categories'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    public function store() {
        request()->validate([
            'name' => 'required',
            'level' => 'required',
        ]);

        Category::create([
            'name' => request()->name,
            'parent_id' => request()->parent_id,
            'level' => request()->level,
        ]);

        return redirect()->route('category.index');
    }

    public function edit(Category $category) {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Category $category) {
        $category->name = request()->name;
        $category->parent_id = request()->parent_id;
        $category->level = request()->level;
        $category->save();

        return redirect(route('category.index'));
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('category.index');
    }
}
