<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceOrder extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'resturant_id', 'estimated_delivery_time', 'delivery_address', 'customer_id',
        'price', 'comment'
    ];

    /**
     * Get the user that owns the placed order
     */
    public function customer_user()
    {
        return $this->belongsTo('App\CustomerUser', 'customer_id');
    }

    /**
     * Get the resturant that owns the placed order
     */
    public function resturant()
    {
        return $this->belongsTo('App\Resturant');
    }

    /**
     * Get the in orders for the placed orders
     */
    public function in_orders()
    {
        return $this->hasMany('App\PlaceOrder');
    }

    /**
     * Get the order statuses for the placed order
     */
    public function order_statuses()
    {
        return $this->hasMany('App\OrderStatus');
    }

}
