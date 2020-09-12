<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\MenuItem;
use App\Resturant;
use App\PlaceOrder;
use App\CustomerUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    /**
     * method to render home page 
     */
    public function home()
    {
        return view('frontend.home');
    }

    /**
     * method to render about page 
     */
    public function about()
    {
        return view('frontend.about');
    }

    /**
     * method to render blog page 
     */
    public function blog()
    {
        return view('frontend.blog');
    }

    /**
     * method to render reservation page 
     */
    public function reservation()
    {
        return view('frontend.reservation');
    }

    /**
     * method to render contact page 
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * method to render menu page 
     */
    public function menu()
    {
        $categories = Category::with('menu_items')->get();
        
        return view('frontend.menu')->with(['categories' => $categories]);
    }

    public function place_order($id)
    {
        if(isset($id))
        {
            $item = MenuItem::where('id', $id)->first();
            $resturant = Resturant::where('active', 1)->first();
            
            $place_oreder = PlaceOrder::create([
                'resturant_id' => $resturant->id,
                'delivery_address' => Auth::user()->address,
                'customer_id' => Auth::user()->id,
                'price' => $item->price,
                'comment' => 'You will get your order'
            ]);

            return redirect()->back()->with('success', 'your order has been placed successfully'); 
        }
        return redirect()->back()->with('error', 'please try again, facing some issue'); 
    }
}
