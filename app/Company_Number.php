<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_Number extends Model
{
    protected $table='company_numbers';
    use SoftDeletes;

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
