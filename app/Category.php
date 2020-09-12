<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the menu items for the category.
     */
    public function menu_items()
    {
        return $this->hasMany('App\MenuItem');
    }
}
