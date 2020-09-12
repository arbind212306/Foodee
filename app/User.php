<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use \Parental\HasChildren;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'phone', 'dob', 'address', 'active', 'city_id',
        'food_type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * protected child types for STI relationship
     */
    protected $childTypes = [
        'ResturantUser' => App\ResturantUser::class,
        'CustomerUser' => App\CustomerUser::class,
    ];

    /**
     * Get the city that owns the user
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
     * Get the food type that owns the user
     */
    public function food_type()
    {
        return $this->belongsTo('App\FoodType');
    }

    /**
     * Get the placed orders for the user
     */
    public function place_orders()
    {
        return $this->hasMany('App\PlaceOrder');
    }
}
