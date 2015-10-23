<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy_One_Get_One_Free extends Model
{
    protected $table = 'buy_one_get_one_free';

    //
    // Model Relationships
    //
    public function promotion()
    {
        return $this->belongsTo('App\Promotion');
    }
}
