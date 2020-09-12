<?php

namespace App\Http\Controllers\Backend;

use App\PlaceOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResturantController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function orders()
    {
        $orders = PlaceOrder::get();
        
        return view('backend.order')->with(['orders' => $orders]);
    }
}
