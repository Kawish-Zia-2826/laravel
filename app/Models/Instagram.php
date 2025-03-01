<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $guarded  = false;
    public $timestamps = false;
    public function insta(){
        return $this->morphedByMany(Tag::class,'tagable');
    }
}
