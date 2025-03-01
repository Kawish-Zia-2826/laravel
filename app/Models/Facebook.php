<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facebook extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    public function image(){
        return $this->morphOne(Image::class,"imagible");
    }
}
