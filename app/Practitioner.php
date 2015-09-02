<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Practitioner extends Model {

    protected $table='practitioners';

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
