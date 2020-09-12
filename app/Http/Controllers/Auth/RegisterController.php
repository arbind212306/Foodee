<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\FoodType;
use App\City;
use App\CustomerUser;
use App\ResturantUser;
use App\Resturant;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * overide the method show registration form.
     */
    public function showRegistrationForm()
    {
        $cities = City::get();
        $food_types = FoodType::get();
        
        return view('auth.register')->with(['cities' => $cities, 'food_types' => $food_types]);
    }

    public function showResturantUserRegistrationForm()
    {
        $cities = City::get();

        return view('auth.resturant_user_register')->with(['cities' => $cities]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'digits:10', 'unique:users'],
            'dob' => ['nullable', 'date'],
            'city' => ['required', 'numeric'],
            'food_type' => ['nullable', 'numeric', 'digits:1'],
            'address' => ['required', 'string', 'max:255'],
            'resturant_name' => ['nullable', 'string', 'max:255']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $segments = request()->segments();
        if($segments[0] == 'resturant-user' && $segments[1] == 'register')
        {
            $user = ResturantUser::create([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
                        'phone' => $data['phone'],
                        'city_id' => $data['city'],
                        'address' => $data['address']
                    ]);
            $resturant = Resturant::create([
                'name' => $data['resturant_name'],
                'address' => $data['address'],
                'resturant_user_id' => $user->id,
                'city_id' => $data['city']]);
            
            return $user;

        }
        else{
            return CustomerUser::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone' => $data['phone'],
                'dob' => $data['dob'],
                'city_id' => $data['city'],
                'food_type_id' => $data['food_type'],
                'address' => $data['address']
            ]);
        }
    }

}
