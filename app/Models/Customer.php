<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function company_phone(){
        return $this->hasOne(Phone_number::class,Companie::class);
    }
}
