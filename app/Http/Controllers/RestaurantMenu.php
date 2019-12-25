<?php


namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantMenu extends Controller
{
    public function waiter()
    {
        $dishes = Restaurant::all();
        return view('waiter', compact('dishes'));
    }


}



