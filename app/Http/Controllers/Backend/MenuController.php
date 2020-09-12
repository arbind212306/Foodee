<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\FoodType;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;
use App\MenuItem;

class MenuController extends Controller
{
    public function __construct()
    {
        //
    }

    public function show()
    {
        $menu_items = MenuItem::get();
        
        return view('backend.menu.show')->with(['menu_items' => $menu_items]);
    }

    public function add()
    {
        $categories = Category::get();
        $food_types = FoodType::get();

        return view('backend.menu.menu')->with(['categories' => $categories, 'food_types' => $food_types]);
    }

    public function create(MenuRequest $request)
    {
        $menu_items = MenuItem::create($request->validated());
        
        return redirect()->route('menu');
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {
        MenuItem::where(['id' => $id])->delete();
        
        return redirect()->route('menu.delete');
    }
}
