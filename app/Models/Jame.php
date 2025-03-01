<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Model;

class Jame extends Model
{
    protected $guarded = false;

    protected $casts=[
        // 'json'=>AsArrayObject::class
        'json'=>'json'
    ];
}
