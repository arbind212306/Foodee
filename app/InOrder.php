<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InOrder extends Model
{
    /**
     * Get the placed order that owns the In order
     */
    public function place_order()
    {
        return $this->belongsTo('App\PlaceOrder');
    }
}
