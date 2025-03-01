<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   public $timestamps = false;
   protected $guarded  = false;
 
   public function feed(){
    return $this->morphedByMany(Feed::class,'tagable');
   }
   public function video(){
    return $this->morphedByMany(Video::class,'tagable');
   }
}
