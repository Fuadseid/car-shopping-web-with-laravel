<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
'maker_id',
'mode_id' ,
'year' ,
'price',
'vin' ,
'mileage' ,
'car_type_id',
'fuel_type_id',
'user_id',
'city_id' ,
'address' ,
'phone',
'description',
'published_id',
'created_at',
'updated_at',
'deleted_at',

    ];
    public function features():HasOne{
        return $this->hasOne(CarFeature::class);
    }
    public function prmaryimage():HasOne{
        return $this->hasOne(related: CarImage::class)->latestOfMany();
    }
    public function images():HasMany{
        return $this->hasmany(CarImage::class);
    }
    public function cartype():BelongsTo{
   return $this->belongsTo(CarType::class,'car_type_id');
    }
}
