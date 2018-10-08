<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_Email extends Model
{
    use SoftDeletes;

    protected $table='company_emails';


    //
    // Model Relationships
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
