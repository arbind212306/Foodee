<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    /**
     * Get the users for the food type
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Get the menu items for the food type
     */
    public function menu_items()
    {
        return $this->hasMany('App\MenuItem');
    }
}
