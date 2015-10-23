<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $dates = ['starting_date', 'end_date'];

    //
    // Model Relationships
    //
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function buy_one_get_one_free()
    {
        return $this->hasOne('App\Buy_One_Get_One_Free');
    }

    public function price_discount()
    {
        return $this->hasOne('App\Price_Discount');
    }
}
