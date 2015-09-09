<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practitioner_Registration extends Model
{
    protected $table = 'practitioner_registrations';
    protected $fillable = [
        'title', 'email', 'first_name',
        'last_name', 'password', 'clinic_name',
        'business_type', 'abn', 'provider_number',
        'street', 'suburb', 'city',
        'state', 'country', 'postcode',
        'telephone', 'mobile_phone'
    ];
    protected $dates = ['approval', 'deleted_at'];
}
