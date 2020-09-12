<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\CustomerUser;
use App\ResturantUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerUser::create([
            'name' => 'Arbind',
            'email' => 'arbind@yopmail.com',
            'password' => Hash::make('12345678'),
            'dob' => date('Y-m-d'),
            'phone' => 9337180770,
            'address' => 'New Market, keonjhar, Orissa',
            'city_id' => 1,
            'food_type_id' => 1,
            'active' => 1
        ]);

        ResturantUser::create([
            'name' => 'Rohan',
            'email' => 'rohan@yopmail.com',
            'password' => Hash::make('12345678'),
            'phone' => 9337180771,
            'address' => 'New Market, keonjhar, Orissa',
            'city_id' => 1,
            'active' => 1
        ]);
    }
}
