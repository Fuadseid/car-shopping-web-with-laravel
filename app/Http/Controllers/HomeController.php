<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
     //$car = Car::get();

    // $car = Car::find(1);

   $car = Car::find(1);
   $car->price = 60000;
   $car->save();
   /* $car = new Car();



       $car->maker_id = 2;    
       $car->mode_id = 4;
       $car->year = 2015;
       $car->price = 60000;
       $car->vin = 4;
       $car->mileage = 4;
       $car->car_type_id = 4;
       $car->fuel_type_id = 4;
       $car->user_id = 1;
       $car->city_id = 4;
       $car->address = "test";
       $car->phone = 12;
       $car->description = "";
       $car->published_at = "2025-06-04 23:53:49.000";
       $car->created_at = null;
       $car->updated_at = null;
       $car->deleted_at = null;
       $car->save();




       */
dump($car);


        return view('home.index');
    }

}
