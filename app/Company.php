<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $table='companies';

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
