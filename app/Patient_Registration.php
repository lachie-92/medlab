<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient_Registration extends Model
{
    use SoftDeletes;

    protected $table = 'patient_registrations';
    protected $fillable = [
        'title', 'email', 'first_name',
        'last_name', 'password', 'street',
        'suburb', 'state',
        'country', 'postcode', 'telephone',
        'mobile_phone', 'practitioner_id', 'practitioner_not_found',
        'practitioner_name', 'practitioner_clinic',
        'practitioner_state', 'practitioner_country', 'practitioner_postcode',
    ];
    protected $dates = ['approval', 'deleted_at'];

    //
    // Query Scope
    //
    public function scopeSearchMonthOldDeletedRegistrations($query)
    {
        $query->onlyTrashed()
            ->where('created_at', '<', Carbon::now()->subMonth());
    }
}
