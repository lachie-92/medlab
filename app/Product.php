<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    public function scopeAlphabeticalOrder($query, $letter)
    {
        return $query->where('product_name', 'like', $letter.'%');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredient_product', 'product_id', 'ingredient_id')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id')->withTimestamps();
    }
}
