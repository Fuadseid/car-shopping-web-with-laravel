<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "maker_id"=>Maker::inRandomOrder()->first()->id,
            "mode_id"=>function(array $attribute){
                return Model::where("maker_id",$attribute["maker_id"])->inRandomOrder()->first() ? Model::where("maker_id",$attribute["maker_id"])->inRandomOrder()->first()->id : null;
            },
            "year"=>fake()->year(),
            "price"=>((int)fake()->randomFloat(2,5,100))*1000,
            "vin"=>strtoupper(Str::random(17)),
            "mileage"=>((int)fake()->randomFloat(2,5,500)),
            "car_type_id"=>CarType::inRandomOrder()->first()->id,
            "fuel_type_id"=>FuelType::inRandomOrder()->first()->id,
            "user_id"=>User::inRandomOrder()->first()->id,
            "city_id"=>City::inRandomOrder()->first()->id,
            "address"=>fake()->address(),
            "phone"=>function(array $attribute){
                return User::find($attribute['user_id'])->phone;
            },
            "description"=>fake()->text(2000),
            "published_at"=>fake()->optional(0.9)->dateTimeBetween("-1 month","+1 month"),
            

        ];
    }
}
