<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, BillableContract
{
    use Billable;
    use Authenticatable, CanResetPassword;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    protected $dates = ['date_approved'];

    //
    // Model Relationships
    //
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function staff()
    {
        return $this->hasOne('App\Staff');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function patient()
    {
        return $this->hasOne('App\Patient');
    }

    public function patients() {
        return $this->hasManyThrough('App\Patient', 'App\Practitioner');
    }

    public function practitioners()
    {
        return $this->hasMany('App\Practitioner');
    }

    public function practitioner_pricing()
    {
        return $this->belongsToMany('App\Product')->withPivot('price_discounted');
    }

    public function consulting()
    {
        return $this->belongsToMany('App\Patient_CarePlan', 'careplan_consultants', 'user_id', 'careplan_id')->withPivot('description');
    }
}
