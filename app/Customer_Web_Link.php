<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer_Web_Link extends Model
{
    protected $table='customer_web_links';
    protected $fillable = ['type', 'description', 'link'];
    use SoftDeletes;

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
