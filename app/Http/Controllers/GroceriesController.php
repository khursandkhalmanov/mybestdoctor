<?php


namespace App\Http\Controllers;


use App\Grocery;

class GroceriesController extends Controller
{ public function getGroceries(){
    $groceries = Grocery::all();
    return view('groceries',compact('groceries'));
}
}
