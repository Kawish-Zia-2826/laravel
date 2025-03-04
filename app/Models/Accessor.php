<?php

namespace App\Models;

use Illuminate\Support\Number;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Accessor extends Model
{
    public $timestamps = false;
    protected $guarded = false;
    public function setEmailAttribute($val){
       $this->attributes['email'] = strtolower($val);
    }
    public function setUserNameAttribute($val)
    {
        $this->attributes['user_name'] = strtolower($val);
    }
    
  
    

    public function setPasswordAttribute($val){
        $this->attributes['password'] = bcrypt($val);
    }

    // protected function Email(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn(string $value) => strtolower($value) // ← Comma hona chahiye, semicolon nahi
    //     );
    // }
    
    // public function getUserNameAttribute($val){
    //     return strtolower($val);
    // }

    
 public function getSalaryAttribute($val){
        return Number::spell($val);
    }

    // public function getDobAttribute($val){
    //     return Date('d M Y',strtotime($val));
    // }
 

    protected function UserName():Attribute{
        return Attribute::make(
            get:fn($val)=>strtolower($val),
            set:fn($val)=>ucwords($val)
        );
    }
    
}
