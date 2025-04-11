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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'maker_id')->constrained('makers');
            $table->foreignId(column: 'mode_id')->constrained('models');
            $table->integer(column: 'year');
            $table->integer(column: 'price');
            $table->string('vin',255);
            $table->string(column: 'mileage');
            $table->foreignId(column: 'car_type_id')->constrained(table: 'car_types');
            $table->foreignId(column: 'fuel_type_id')->constrained(table: 'fuel_types');
            $table->foreignId(column: 'user_id')->constrained(table: 'users');
            $table->foreignId(column: 'city_id')->constrained(table: 'cities');
            $table->string('address',255);
            $table->string('phone',45);
            $table->longText('description');
            $table->timestamp(column: 'published_at')->nullable();
            $table->timestamps();
            $table->timestamp(column: 'deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
