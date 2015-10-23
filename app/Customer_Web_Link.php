<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer_Web_Link extends Model
{
    use SoftDeletes;

    protected $table='customer_web_links';
    protected $fillable = ['type', 'description', 'link'];


    //
    // Model Relationships
    //
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
