<?php

namespace App\Models;

use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;
#[ScopedBy(UserScope::class)]
class Employee extends Model
{
    public function scopeStatus($q){
            return $q->where('status','active');
    }
    public function scopeCity($q,$c){
        return $q->where('city',$c);
}
public function scopeOrder($q){
    return $q->orderBy();
}


// public static function booted():void{
//     static::addGlobalScope(new UserScope
//     );
// }
}
