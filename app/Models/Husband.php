<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Husband extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    public function wife(){
        return $this->hasMany(Wife::class,'husband_id','id');
    }

//  protected static function booted():void
//  {
//     static::deleted(function ($data){
//         $data->wife()->delete();
//     });
//  }
}
