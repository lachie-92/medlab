<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table='patients';

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
}
