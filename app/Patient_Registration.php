<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_Registration extends Model
{
    protected $table = 'patient_registrations';
    protected $fillable = [
        'title', 'email', 'first_name',
        'last_name', 'password', 'street',
        'suburb', 'city', 'state',
        'country', 'postcode', 'telephone',
        'mobile_phone', 'practitioner_id', 'practitioner_not_found',
        'practitioner_not_found_practitioner_name', 'practitioner_not_found_clinic', 'practitioner_not_found_city',
        'practitioner_not_found_state', 'practitioner_not_found_country', 'practitioner_not_found_postcode',
    ];
}
