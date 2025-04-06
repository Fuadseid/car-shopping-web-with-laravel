<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as ElequentModel;

class Model extends ElequentModel
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["name","maker_id"];

    //
}
