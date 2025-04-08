<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeature extends Model
{
    protected $primaryKey = "car_id";
    use HasFactory;
    public $timestamps = false;
  protected $fillable = [
    "car_id",
    "abs",
    "air_conditioning",
    "power_windows",
    "power_door_locks",
    "cruise_control",
    "blutooth_connectivity",
    "remote_start",
    "gps_navigation",
    "heater_seats",
    "climate_control",
    "rear_parking_sensors",
    "leather_seats",
  ];
  public function car():BelongsTo{
    return $this->belongsTo(Car::class,'car_id');
}
    
}
