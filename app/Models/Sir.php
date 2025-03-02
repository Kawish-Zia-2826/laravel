<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sir extends Model
{
    protected $guarded = false;
    public $timestamps = false;

    public function miss(){
        return $this->hasMany(Mis::class);
    }
}
