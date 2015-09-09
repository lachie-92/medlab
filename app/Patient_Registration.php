<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient_Registration extends Model
{
    use SoftDeletes;

    protected $table = 'patient_registrations';
    protected $fillable = [
        'title', 'email', 'first_name',
        'last_name', 'password', 'street',
        'suburb', 'city', 'state',
        'country', 'postcode', 'telephone',
        'mobile_phone', 'practitioner_id', 'practitioner_not_found',
        'practitioner_name', 'practitioner_clinic', 'practitioner_city',
        'practitioner_state', 'practitioner_country', 'practitioner_postcode',
    ];
    protected $dates = ['approval', 'deleted_at'];
}
