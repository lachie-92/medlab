<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $dates = ['purchase_date'];

    //
    // Query Scope
    //
    public function scopeSearchUserOrders($query)
    {
        $query->where('user_id', Auth::user()->id);
    }

    public function scopeSearchProcessedOrders($query)
    {
        $query->where('order_status', '!=', 'New Order');
    }

    public function scopeSearchCancelledOrders($query)
    {
        $query->where('order_status', '=', 'Order Cancelled');
    }

    public function scopeSearchDispatchedOrders($query)
    {
        $query->where('order_status', '=', 'Order Dispatched');
    }

    public function scopeSearchOnHoldOrders($query)
    {
        $query->where('order_status', '=', 'Order On-hold');
    }

    public function scopeSearchReceivedOrders($query)
    {
        $query->where('order_status', '=', 'Order Received');
    }

    public function scopeSearchDayOldUnprocessedOrders($query)
    {
        $query->where('created_at', '<', Carbon::yesterday())
            ->where(function($query) {
                $query->whereNull('transaction_status') ->
                orWhere('transaction_status', '=', '');
            });
    }

    //
    // Model Relationships
    //
    public function orderedProducts()
    {
        return $this->hasMany('App\OrderedProduct');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
