<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer_Email extends Model
{
    use SoftDeletes;

    protected $fillable = ['type', 'description', 'email_address', 'preferred'];
    protected $table='customer_emails';


    //
    // Model Relationships
    //
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
