<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    public function makanik(){
        return $this->morphToMany(Makanik::class,'workable');
    }
}
