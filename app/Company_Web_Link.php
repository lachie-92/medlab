<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_Web_Link extends Model
{
    protected $table='company_web_links';

    //
    // Model Relationships
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
