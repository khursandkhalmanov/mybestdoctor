<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function contactus(Request $request){
        $parms = $request->all();
        return view("contactus",compact('parms'));
    }

    public function postcontactus(Request $request){
        $parms = $request->input();
        $method = $request->method();

        $rndcarnum = rand(1,100);
        $ar = ['jon','jessica','sarh'];
        $rndcarname = shuffle($ar);

        $car = new Car();
        $car->code = 'CODE_'.$rndcarnum;
        $car->title = 'JON ALFA -'.$rndcarname;
        $result = $car->save();
        if ($result){
            return redirect()->back()->with("msg","Your car has been successfully created");
        }else{
            return redirect()->back()->withErrors("An error has occurred");
        }

    }
}
