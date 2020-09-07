<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Image;

class Product extends Model
{
	protected $fillable = ['name', 'content', 'price', 'image_id'];
	
    public function categories() {
    	return $this->belongsToMany(Category::class, 'product_categories', 'category_id', 'product_id');
    }

    public function images() {
        return $this->hasMany(Image::class, 'product_id');
    }
}
