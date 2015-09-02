<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table='patients';

    public function practitioner()
    {
        return $this->belongsTo('App\Practitioner');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
