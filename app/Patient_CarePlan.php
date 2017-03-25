<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_CarePlan extends Model
{
    protected $table = 'patient_careplans';
    protected $primaryKey = 'id';

    public function attributes()
    {
        return $this->hasMany('App\Patient_CarePlan_Attribute', 'careplan_id');
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
