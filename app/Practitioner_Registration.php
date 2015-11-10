<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Practitioner_Registration extends Model
{
    use SoftDeletes;

    protected $table = 'practitioner_registrations';
    protected $fillable = [
        'title', 'email', 'first_name',
        'last_name', 'password', 'clinic_name',
        'business_type', 'abn', 'provider_number',
        'street', 'suburb', 'city',
        'state', 'country', 'postcode',
        'telephone', 'mobile_phone', 'business_number'
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
