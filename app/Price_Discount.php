<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price_Discount extends Model
{
    protected $table = 'price_discount';

    //
    // Model Relationships
    //
    public function promotion()
    {
        return $this->belongsTo('App\Promotion');
    }
}
