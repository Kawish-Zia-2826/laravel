<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = false;
    public $timestamps = false;
    public function tag(){
        return $this->morphToMany(Tag::class,'tagable');
    }
}
