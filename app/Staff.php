<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    protected $table = 'staffs';
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function customers()
    {
        return $this->belongsToMany('App\Customer', 'customer_staff', 'staff_id', 'customer_id');
    }

    public function companies()
    {
        return $this->belongsToMany('App\Company', 'company_staff', 'staff_id', 'company_id');
    }

}
