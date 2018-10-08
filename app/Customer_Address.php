<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer_Address extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'type', 'description', 'postcode', 'state', 'suburb', 'street',
        'address', 'country', 'territory', 'longitude', 'latitude',
        'valid_for_geocoding', 'geocoded_address',
    ];
    protected $table='customer_addresses';


    //
    // Model Relationships
    //
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
