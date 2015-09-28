<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';
    protected $primaryKey = 'id';

    public function scopeAlphabeticalOrder($query, $letter)
    {
        return $query->where('ingredient_name', 'like', $letter.'%');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'ingredient_product', 'ingredient_id', 'product_id')->withTimestamps();
    }
}
