<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'idProduct';

    public function scopeAlphabeticalOrder($query, $letter)
    {
        return $query->where('product_name', 'like', $letter.'%');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredient_product', 'idProduct', 'idIngredient')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_product', 'idProduct', 'idCategory')->withTimestamps();
    }
}
