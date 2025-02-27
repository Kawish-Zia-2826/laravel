<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;

    // public function student(){
    //     return $this->belongsTo(Student::class);
    // }

    public function student(){
        return $this->belongsToMany (Contact::class,'address');
    }
    protected $guarded = [];
}
