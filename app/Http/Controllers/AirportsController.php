<?php

namespace App\Http\Controllers;

use App\Airport;
use Illuminate\Http\Request;

class AirportsController extends Controller
{
    public function lists(Request $request) {
        $where = 'country';
        $value = 'Uzbekistan';
        if ($request->select){
            $where = $request->select;
        }
        if ($request->country){
            $value = $request->country;
        }
        $airports=  Airport::where($where, $value)->get();
        return view('jontoshmatov.airports')->with('airports', $airports);
    }

    public function keywordsearch(Request $request){
        $airports = Airport::where('country', 'like', $request->keyword.'%')->select('country')->groupBy('country')->get();
        return $airports;
    }
}

