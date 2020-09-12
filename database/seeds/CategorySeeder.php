<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = array(
            array('name' => 'breakfast', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'lunch', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'dinner', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),            
        );

        DB::table('categories')->insert($category);
    }
}
