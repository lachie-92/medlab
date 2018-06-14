<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer_Number extends Model
{
    use SoftDeletes;

    protected $fillable = ['type', 'description', 'number', 'preferred'];
    protected $table='customer_numbers';


    //
    // Model Relationships
    //
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
