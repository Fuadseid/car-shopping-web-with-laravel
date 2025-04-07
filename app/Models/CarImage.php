<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    use HasFactory;
    protected $table = 'car_image'; 
    public $timestamps = false;
  protected $fillable = ["car_id", "image_path","position"];
    //
}
