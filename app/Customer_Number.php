<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer_Number extends Model
{
    protected $fillable = ['type', 'description', 'number', 'preferred'];
    protected $table='customer_numbers';
    use SoftDeletes;

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
