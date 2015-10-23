<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_Address extends Model
{
    use SoftDeletes;

    protected $table='company_addresses';

    //
    // Model Relationships
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
