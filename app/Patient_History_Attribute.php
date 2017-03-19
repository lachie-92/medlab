<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_History_Attribute extends Model
{

    protected $table='patient_history_attributes';

    public function history()
    {
        return $this->belongsTo('App\Patient_History', 'history_id');
    }
}
