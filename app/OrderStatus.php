<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    /**
     * Get the placed order that owns the order status
     */
    public function place_order()
    {
        return $this->belongsTo('App\PlaceOrder');
    }
}
