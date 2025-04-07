<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use Illuminate\Http\Request;
use App\Models\CarImage;

class HomeController extends Controller
{
    public function index(){
     //$car = Car::get();
    // $car = Car::find(1);
  /*  $car = Car::find(1);
   $car->price = 60000;
   $car->save(); */
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
      /*  $car = Car::where('price', '>',20000)->get();
       dump($car); */
    /*    $maker = Maker::where('name', 'Toyota')->get();
       dump($maker); */
     /*   $fueltype = new FuelType();
          $fueltype->name="Electric";
          $fueltype->save(); */
/*     $car= Car::where('id',operator: 1)->update(['price'=>15000]);
 */
/*    $car = Car::where('year','<',2010)->delete();
 */
   $car = Car::find(1);

  // dd($car->features, $car->prmaryimage);
/*   $carfeature = new CarFeature([
    "abs"=>false,
    "air_conditioning"=>false,
    "power_windows"=>true,
    "power_door_locks"=>true,
    "cruise_control"=>true,
    "blutooth_connectivity"=>false,
    "remote_start"=>false,
    "gps_navigation"=>false,
    "heater_seats"=>false,
    "climate_control"=>false,
    "rear_parking_sensors"=>false,
    "leather_seats"=>false,
  ]);
  $car->features()->save( $carfeature);
 */

/*  $image = new CarImage(["image_path"=>'something',"position"=>'lll']);
 */ /* $image = new CarImage(["image_path"=>'something 1',"position"=>'lppll']);
    
 $car->prmaryimage()->save($image);
 */
/*   $car->images()->createMany([
    ["image_path"=>'something 7',"position"=>'lppll'],
    ["image_path"=>'something 8',"position"=>'lppll'],
    ["image_path"=>'something 9',"position"=>'lppll']
  ]);

 dd($car->images()->get()); */

$cartype = CarType::where('id',operator: 3)->first();



/* dd($car->whereBelongsTo($cartype)->get());
 */

/* dd($cartype->cars()->get());
 */

/*  $car->cartype()->associate($cartype);
 */

$car->car_type_id = $cartype->id;

 $car->save();
 return view(view: 'home.index');


    

}
}