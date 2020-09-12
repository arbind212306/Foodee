<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'food_type_id', 'description', 'ingredients', 'recipe',
        'price', 'active'
    ];

    /**
     * Get the food type that owns the menu item.
     */
    public function food_type()
    {
        return $this->belongsTo('App\FoodType');
    }

    /**
     * Get the category that owns the menu items
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
