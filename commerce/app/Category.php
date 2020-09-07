<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Product;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id', 'level'];
	
    public function parent() {
    	return $this->belongsTo(self::class, 'parent_id');
    }

    public function children() {
    	return $this->hasMany(self::class, 'parent_id');
    }

    public function products() {
    	return $this->belongsToMany(Product::class, 'product_categories', 'category_id', 'product_id');
    }
}
