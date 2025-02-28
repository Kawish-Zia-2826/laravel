<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    public $timestamps = false;
    public function children(){
        return $this->hasOneThrough(Children::class,Mother::class,'Husband','Mother_name','id','id');
    }
    public function mother(){
        return $this->hasOne(Mother::class,"Husband",'id');
    }
    public function latestMother(){
        return $this->hasOne(Mother::class,"Husband",'id')->latestOfMany();
    }
    public function oldestMother(){
        return $this->hasOne(Mother::class,"Husband",'id')->oldestOfMany();
    }
    public function mother_name(){
            return $this->hasMany(Mother::class,'Husband','id');
    }
}
