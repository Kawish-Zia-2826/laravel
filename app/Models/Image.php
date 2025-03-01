<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function imagible(){
        return $this->morphTo();
    }
    // public function imagible(){
    //     return $this->morphTo(__FUNCTION__,'imagible','imagible_id');
    // }
}
