<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Practitioner extends Model {

    protected $table='practitioners';
    use SoftDeletes;

    //
    // Query Scope
    //
    public function scopeFilterCountry($query, $country_code) {
        $query
            ->whereHas('company', function($q) use ($country_code) {
               $q
                    ->whereHas('company_addresses', function($q) use ($country_code) {
                        $q
                            ->where('country', '=', $country_code);
                    });
            });
    }

    public function scopeFilterState($query, $state) {
        $query
            ->whereHas('company', function($q) use ($state) {
                $q
                    ->whereHas('company_addresses', function($q) use ($state) {
                        $q
                            ->where('state', '=', $state);
                    });
            });
    }

    public function scopeFilterSuburb($query, $suburb) {
        $query
            ->whereHas('company', function($q) use ($suburb) {
                $q
                    ->whereHas('company_addresses', function($q) use ($suburb) {
                        $q
                            ->where('suburb', '=', $suburb);
                    });
            });
    }

    public function scopeFilterPostcode($query, $postcode) {
        $query
            ->whereHas('company', function($q) use ($postcode) {
                $q
                    ->whereHas('company_addresses', function($q) use ($postcode) {
                        $q
                            ->where('postcode', '=', $postcode);
                    });
            });
    }

    public function scopeFilterClinic($query, $company_name) {
        $query
            ->whereHas('company', function($q) use ($company_name) {
                $q
                    ->where('name', 'like', '%' . $company_name . '%');
            });
    }

    public function scopeFilterFirstName($query, $first_name) {
        $query
            ->whereHas('user', function($q) use ($first_name) {
                $q
                    ->whereHas('customer', function($q) use ($first_name) {
                        $q
                            ->where('first_name', 'like', '%' . $first_name . '%');
                    });
            });
    }

    public function scopeFilterLastName($query, $last_name) {
        $query
            ->whereHas('user', function($q) use ($last_name) {
                $q
                    ->whereHas('customer', function($q) use ($last_name) {
                        $q
                            ->where('last_name', 'like', '%' . $last_name . '%');
                    });
            });
    }

    //
    // Model Relationships
    //
    public function patients()
    {
        return $this->hasMany('App\Patient');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function consulting()
    {
        return $this->belongsToMany('App\Patient_CarePlan', 'careplan_consultants', 'practitioner_id', 'careplan_id');
    }

}
