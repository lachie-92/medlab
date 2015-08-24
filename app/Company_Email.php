<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_Email extends Model
{
    protected $table='company_emails';
    use SoftDeletes;

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
