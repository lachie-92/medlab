<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careplan_Consultant extends Model
{
    protected $table = 'careplan_consultants';
    protected $primaryKey = 'id';
    protected $fillable = [ 'email' ];
    protected $dates = [ 'target' ];

    public function practitioner()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function setTargetAttribute($value)
    {
        $this->attributes['target'] = \Carbon\Carbon::createFromFormat('m/d/Y', $value);
    }

    public function scopeLocked($query) {
        return $query->whereNotNull('locked_at');
    }
    public function scopeUnlocked($query) {
        return $query->whereNull('locked_at');
    }
}
