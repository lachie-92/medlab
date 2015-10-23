<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedProducts_Promotion extends Model
{
    protected $table = 'orderedProducts_Promotions';
    protected $dates = ['promotion_starting_date', 'promotion_end_date'];

    //
    // Model Relationships
    //
    public function ordered_Product()
    {
        return $this->belongsTo('App\OrderedProduct');
    }
}
