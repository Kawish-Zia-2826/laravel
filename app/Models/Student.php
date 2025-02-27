<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    public function contact(){
        return $this->hasOne(Contact::class);
    }

    // protected $table = 'contacts';
    protected $guarded = [];
    // protected $fillable  = ['phone','name','city']; 
}
