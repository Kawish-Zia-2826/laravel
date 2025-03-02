<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    // public function contact(){
    //     // return $this->hasMany(Contact::class,'student_id','id');
    // }
    public function contact(){
        return $this->belongsToMany (Contact::class,'address');
    }
 
    // protected $table = 'contacts';
    protected $guarded = [];
    // protected $fillable  = ['phone','name','city']; 
}
    