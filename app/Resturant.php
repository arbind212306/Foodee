<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    protected $fillable = [
        'name', 'address', 'resturant_user_id', 'city_id'
    ];

    /**
     * Get the placed orders that own the resturants
     */
    public function place_orders()
    {
        return $this->hasMany('App\PlaceOrder');
    }
}
