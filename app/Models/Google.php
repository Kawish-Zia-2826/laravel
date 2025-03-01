<?php

namespace App\Models;
use App\Models\Image;

use Illuminate\Database\Eloquent\Model;

class Google extends Model
{
    public $timestamps =false;
    protected $guarded = [];

    // public function image(){
    //     // return $this->morphOne(Image::class,'imagible');
    //     return $this->morphMany(Image::class,'imagible');
    // }

    public function latest_image(){
        // return $this->morphOne(Image::class,'imagible');
        return $this->morphOne(Image::class,'imagible')->latestOfMany();
    }
    public function oldest_image(){
        // return $this->morphOne(Image::class,'imagible');
        return $this->morphOne(Image::class,'imagible')->oldestOfMany();
    }
}
