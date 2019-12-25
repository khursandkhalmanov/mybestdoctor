<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    public $parms;

    public function __construct(Request $request)
    {
        $this->parms = $request;
    }

    public function cars(){
        $cars = Car::orderBy('id','desc')->get(); //get? nned Explanation
        return view('cars')->with('cars', $cars); // with? need Explanation
    }
    public function insertCars(){
        $data = [
            'code' => $this->parms['code'],
            'title' => $this->parms['title'],
            'price' => $this->parms['price'],
        ];
        $inserted = Car::create($data);
        return redirect("cars?msg=Your new car id $inserted->id has been added successfully");
    }

    public function deleteCars(){
        $ids = $this->parms['cars'];
        $deleted = Car::whereIn('id', $ids)->delete();
        return redirect('cars?msg=your car(s) has been poofed');
    }
    public function deleteCar(Request $request){
        $id = (int) $request->id;
        $deleted = Car::find($id)->delete();
        return redirect("cars?msg=your car id: $id  has been towed for good");
    }
    public function updateCars(){
        $car = Car::find($this->parms['id']);
        $car->code = $this->parms['code'];
        $car->title = $this->parms['title'];
        $car->price = $this->parms['price'];
        $car->save();
        return [true]; //why do we need this?
    }
}
