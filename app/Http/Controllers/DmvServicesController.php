<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class DmvServicesController extends Controller
{
    public function sarah(){

        $cars = Car::all();
        return view("pickup", compact('cars'));
    }
}
