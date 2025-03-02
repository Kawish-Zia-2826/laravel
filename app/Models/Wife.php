<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wife extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'wifes';
    public function husband(){
        return $this->belongsTo(Husband::class);
    }
}
