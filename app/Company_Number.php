<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_Number extends Model
{
    use SoftDeletes;

    protected $table='company_numbers';

    //
    // Model Relationships
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
