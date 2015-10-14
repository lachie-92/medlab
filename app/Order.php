<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $dates = ['purchase_date'];

    public function scopeSearchUserOrders($query)
    {
        $query->where('user_id', Auth::user()->id);
    }

    public function scopeSearchProcessedOrders($query)
    {
        $query->where('order_status', '!=', 'New order');
    }

    public function orderedProducts()
    {
        return $this->hasMany('App\OrderedProduct');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
