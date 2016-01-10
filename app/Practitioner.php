<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Practitioner extends Model {

    protected $table='practitioners';

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
}
