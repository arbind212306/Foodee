<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusCatlog extends Model
{
    /**
     * Get the staus orders for the status catlog
     */
    public function order_status()
    {
        return $this->hasMany('App\OrderStatus');
    }
}
