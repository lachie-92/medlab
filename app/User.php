<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    //An user belongs to a customer
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function staff()
    {
        return $this->hasOne('App\Staff');
    }

    //An user has many orders
    public function orders()
    {
        return $this->hasMany('App\Order', 'user_id');
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
