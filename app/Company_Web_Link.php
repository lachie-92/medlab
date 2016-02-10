<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_Web_Link extends Model
{
    protected $table='company_web_links';
    use SoftDeletes;

    //
    // Model Relationships
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
