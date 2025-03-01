<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function children(){
        return $this->hasMany(Children::class,'Mother_name','id');
    }
    public function husband(){
            return $this->belongsTo(Father::class,'Husband','id');
    }
}
