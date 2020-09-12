<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ResturantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resturants')->insert(['name' => 'swadist', 'address' => 'keonjhar', 
        'resturant_user_id' => 2, 'city_id' => 1, 'active' => 1]);
    }
}
