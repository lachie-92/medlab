<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_History extends Model
{
    protected $table='patient_histories';

    public function attributes()
    {
        return $this->hasMany('App\Patient_History_Attribute', 'history_id');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function scopeLocked($query) {
        return $query->whereNotNull('locked_at');
    }
    public function scopeUnlocked($query) {
        return $query->whereNull('locked_at');
    }
}
