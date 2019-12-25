<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CarColor extends Controller
{
     function insert(Request $request){
         $code=$request->input('code');
         $title=$request->input('title');
        $color=$request->input('color');
        $data=['code'=>$code,'title'=>$title, 'color'=>$color];
        DB::table('cars')->insert($data);
      if($data){echo 'sucsess';}
    }
}
