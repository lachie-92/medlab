<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patent extends Model
{
    protected $fillable = [
        'product',
        'jurisdiction',
        'application_number',
        'description',
        'filing_date',
        'status',
    ];

    protected $dates = [
        'filing_date',
    ];

    protected $dateFormat = 'd/m/Y';

    public function setFilingDateAttribute($value)
    {
        $this->attributes['filing_date'] = Carbon::createFromFormat('d/m/y', $value);
    }

    public function getFilingDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}
