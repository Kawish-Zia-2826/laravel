<?php

namespace App\Models;
use App\Models\Image;

use Illuminate\Database\Eloquent\Model;

class Google extends Model
{
    public $timestamps =false;
    protected $guarded = [];

    public function image(){
        return $this->morphOne(Image::class,'imagible');
    }
}
