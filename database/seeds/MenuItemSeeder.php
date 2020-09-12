<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu_items = [
            ['name' => 'Dosa', 'category_id' => 1, 'food_type_id' => 1,
            'description' => 'awesome dosa', 'ingredients' => 'nariyal chatani, sambar, masala',
            'recipe' => 'South Indian', 'price' => 100, 'active' => 1],
            ['name' => 'Dal Fry', 'category_id' => 2, 'food_type_id' => 1,
            'description' => 'awesome dal', 'ingredients' => 'harhar, tomato, masala',
            'recipe' => 'North Indian', 'price' => 100, 'active' => 1],
            ['name' => 'Chilly Paneer', 'category_id' => 3, 'food_type_id' => 1,
            'description' => 'awesome chilly panner', 'ingredients' => 'paneer, capsicum, masala',
            'recipe' => 'Nort East Indian', 'price' => 100, 'active' => 1],
        ];

        DB::table('menu_items')->insert($menu_items);
    }
}
