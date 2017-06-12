<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careplan_Consultant extends Model
{
    protected $table = 'careplan_consultants';
    protected $primaryKey = 'id';
    protected $fillable = [ 'email' ];

    public function practitioner()
    {
        return $this->hasOne('App\Practitioner', 'id', 'practitioner_id');
    }
}
