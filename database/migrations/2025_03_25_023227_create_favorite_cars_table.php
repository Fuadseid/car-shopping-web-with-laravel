<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('favorite_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars');
            $table->foreignId(column: 'user_id')->constrained('users');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('favorite_cars');
    }
};
