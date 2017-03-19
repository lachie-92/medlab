<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    protected $table='patients';
    use SoftDeletes;

    //
    // Model Relationships
    //
    public function practitioner()
    {
        return $this->belongsTo('App\Practitioner');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function histories()
    {
        return $this->hasMany('App\Patient_History');
    }
}
