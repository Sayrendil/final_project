<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $posts = Post::all();
        return view('admin.post.table', compact('posts'));
    }
    public function create() {
    	return view('admin.post.create');
    }

    public function store() {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => request()->title,
            'content' => request()->content,
        ]);

        return redirect()->route('action');
    }

    public function edit(Post $post) {

    }

    public function update(Post $post) {
        $post->title = request()->title;
		$post->content = request()->content;
		$post->image = request()->image;
        $post->save();

        return redirect(route('action'));
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('action');
    }
}
