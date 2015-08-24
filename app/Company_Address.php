<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_Address extends Model
{
    protected $table='company_addresses';
    use SoftDeletes;

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
