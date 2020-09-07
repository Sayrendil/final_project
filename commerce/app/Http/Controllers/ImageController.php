<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function store() {
        request()->validate([
            'image' => 'required',
            'product_id' => 'required'
        ]);

        Image::create([
            'image' => request()->image,
            'product_id' => request()->product_id
        ]);

        return redirect(route('index'));
    }
}
