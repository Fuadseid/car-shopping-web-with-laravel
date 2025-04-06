<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_features', function (Blueprint $table) {
          $table->unsignedBigInteger('car_id')->primary();
          $table->boolean('abs')->default(0);
          $table->boolean('air_conditioning')->default(0);
          $table->boolean(column: 'power_windows')->default(0);
          $table->boolean(column: 'power_door_locks')->default(0);
          $table->boolean(column: 'cruise_control')->default(0);
          $table->boolean(column: 'blutooth_connectivity')->default(0);
          $table->boolean(column: 'remote_start')->default(0);
          $table->boolean(column: 'gps_navigation')->default(0);
          $table->boolean(column: 'heater_seats')->default(0);
          $table->boolean(column: 'climate_control')->default(0);
          $table->boolean(column: 'rear_parking_sensors')->default(0);
          $table->boolean(column: 'leather_seats')->default(0);





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features');
    }
};
