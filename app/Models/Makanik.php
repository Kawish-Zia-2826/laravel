<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makanik extends Model
{
    protected $guarded = [];
    public $timestamps = false;


    public function car(){
        return $this->morphedByMany(Car::class,'workable');
    }
    public function bike(){
        return $this->morphedByMany(Bike::class,'workable');
    }
}
