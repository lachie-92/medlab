<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model {

    protected $table='companies';
    use SoftDeletes;

    //
    // Query Scope
    //
    public function scopeSearchItem($query, $searchItem) {

        $query
            //->where('id', 'like', $searchItem)
            ->where('name', 'like', $searchItem . '%');
    }

    public function scopeSearchTags($query, $tags) {

        $query
            ->whereHas('company_tags', function($q) use ($tags) {
                $q->whereIn('id', $tags);
            }, '=', count($tags));
    }

    public function scopeFilterCountry($query, $country_code) {
        $query
            ->whereHas('company_addresses', function($q) use ($country_code) {
                $q
                    ->where('country', '=', $country_code);
            });
    }

    public function scopeFilterState($query, $state) {
        $query
            ->whereHas('company_addresses', function($q) use ($state) {
                $q
                    ->where('state', '=', $state);
            });
    }

    public function scopeFilterSuburb($query, $suburb) {
        $query
            ->whereHas('company_addresses', function($q) use ($suburb) {
                $q
                    ->where('suburb', '=', $suburb);
            });
    }

    public function scopeFilterPostcode($query, $postcode) {
        $query
            ->whereHas('company_addresses', function($q) use ($postcode) {
                $q
                    ->where('postcode', '=', $postcode);
            });
    }

    public function scopeFilterName($query, $company_name) {
        $query
            ->where('name', 'like', '%' . $company_name . '%');
    }

    public function scopeFilterType($query, $type) {
        $query
            ->where('business_type', '=', $type);
    }

    public function scopeFilterBusinessNumber($query, $businessNumber) {
        $query
            ->where('business_number', '=', $businessNumber);
    }

    //
    // Model Relationships
    //
    public function company_tags()
    {
        return $this->belongsToMany('App\Company_Tag', 'attach_company_tag', 'company_id', 'company_tag_id')->withTimestamps();
    }

    public function company_emails()
    {
        return $this->hasMany('App\Company_Email');
    }

    public function company_numbers()
    {
        return $this->hasMany('App\Company_Number');
    }

    public function related_to()
    {
        return $this->hasMany('App\Related_To', 'this_company_id');
    }

    public function practitioners()
    {
        return $this->hasMany('App\Practitioner');
    }

    public function company_addresses()
    {
        return $this->hasMany('App\Company_Address');
    }
}
