<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'idCategory';

    public function products()
    {
        return $this->belongsToMany('App\Product', 'category_product', 'idCategory', 'idProduct')->withTimestamps();
    }

}
