<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class User extends Model
{
    public $timestamps = false;


    public function post(){
        return $this->hasMany(Post::class);
    }

    protected static function booted():void  {
        static::deleted(function($u){
                $u->post()->delete();
        });
    }
}
