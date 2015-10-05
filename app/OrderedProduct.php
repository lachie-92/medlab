<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    protected $table = 'orderedProducts';

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function promotion()
    {
        return $this->hasOne('App\OrderedProducts_Promotion');
    }
}
