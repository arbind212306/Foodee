<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes();

Route::group(['middleware' => ['auth' => 'resturant_user'], 'prefix' => '/resturant-user'], function() {
    Route::get('/dashboard', 'Backend\ResturantController@dashboard')->name('dashboard');
    Route::get('/register', 'Auth\RegisterController@showResturantUserRegistrationForm');
    Route::post('/register', 'Auth\RegisterController@register');
    //menu links
    Route::get('/menu', 'Backend\MenuController@show')->name('menu');
    Route::get('/menu/add', 'Backend\MenuController@add')->name('menu.add');
    Route::post('/menu/add', 'Backend\MenuController@create')->name('menu.create');
    Route::put('/menu/edit/{id}', 'Backend\MenuController@edit')->name('menu.edit');
    Route::delete('/menu/delete/{id}', 'Backend\MenuController@delete')->name('menu.delete');
    //order links
    Route::get('/orders', 'Backend\ResturantController@orders')->name('orders');

});

// frontend routes
Route::get('/home', 'Frontend\FrontendController@home');
Route::get('/about', 'Frontend\FrontendController@about');
Route::get('/chef', 'Frontend\FrontendController@chef');
Route::get('/blog', 'Frontend\FrontendController@blog');
Route::get('/menu', 'Frontend\FrontendController@menu')->name('frontend.menu');
Route::get('/reservation', 'Frontend\FrontendController@reservation');
Route::get('/contact', 'Frontend\FrontendController@contact');

Route::get('/customer/place-order/{id}', 'Frontend\FrontendController@place_order')->name('customer.place.order')->middleware('place_order');
