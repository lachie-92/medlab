<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    //
    // Model Relationships
    //
    public function products()
    {
        return $this->belongsToMany('App\Product', 'category_product', 'category_id', 'product_id')->withTimestamps();
    }

}
