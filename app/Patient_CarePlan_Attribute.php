<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_CarePlan_Attribute extends Model
{

    protected $table      = 'patient_careplan_attributes';

    public function history()
    {
        return $this->belongsTo('App\Patient_CarePlan', 'careplan_id');
    }
}
