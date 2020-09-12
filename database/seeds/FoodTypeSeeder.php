<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food_types = [
            ['name' => 'Veg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Non Veg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ];

        DB::table('food_types')->insert($food_types);
    }
}
