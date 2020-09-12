<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name'
    ];
    /**
     * Get the users for the city.
     */
    public function users()
    {
        return $this->hasMAny('App\User');
    }

    /**
     * Get the resturants for the city
     */
    public function resturants()
    {
        return $this->hasMany('App\Resturant');
    }
}
