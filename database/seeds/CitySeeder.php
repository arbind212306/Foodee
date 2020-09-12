<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = array(
            array('name' => 'Bhubaneswar', 'zipcode' => 854311),
            array('name' => 'Pune', 'zipcode' => 854311),
            array('name' => 'Jaipur', 'zipcode' => 854311),
            array('name' => 'Surat', 'zipcode' => 854311),
            array('name' => 'Kochii', 'zipcode' => 854311),
            array('name' => 'Ahmedabad', 'zipcode' => 854311),
            array('name' => 'Lucknow', 'zipcode' => 854311),
            array('name' => 'Bhagalpur', 'zipcode' => 854311),
            array('name' => 'New Town, Kolkata', 'zipcode' => 854311),
            array('name' => 'Faridabad', 'zipcode' => 854311),
            array('name' => 'Chandigarh', 'zipcode' => 854311),
            array('name' => 'Raipur', 'zipcode' => 854311),
            array('name' => 'Ranchi', 'zipcode' => 854311),
            array('name' => 'Dharamasala', 'zipcode' => 854311),
            array('name' => 'Warangal', 'zipcode' => 854311),
            array('name' => 'Panaji', 'zipcode' => 854311),
            array('name' => 'Agartala', 'zipcode' => 854311),
        );

        DB::table('cities')->insert($cities);
    }
}
