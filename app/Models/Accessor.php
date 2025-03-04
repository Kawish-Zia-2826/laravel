<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessor extends Model
{
    public $timestamps = false;
    protected $guarded = false;
    public function getEmailAttribute($val){
        return ucwords($val);
    }

}
