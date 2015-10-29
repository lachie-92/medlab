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

    public function practitioner()
    {
        return $this->hasOne('App\Practitioner');
    }
}
