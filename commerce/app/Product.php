<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
	protected $fillable = ['name', 'content', 'price', 'image'];
	
    public function categories() {
    	return $this->belongsToMany(Category::class, 'product_categories');
    }
}
