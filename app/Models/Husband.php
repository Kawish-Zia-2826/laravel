<?php

namespace App\Models;

use App\Models\Scopes\HubandScope;
use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
// #[ScopedBy([UserScope::class])]
class Husband extends Model
{
    // protected $with = ['wife'];
    protected $guarded = [];
    public $timestamps = false;
    public function wife(){
        return $this->hasMany(Wife::class,'husband_id','id')->select(['wife_name as Wife','husband_id']);
    }
    // protected $with = ['wife'];

//  protected static function booted():void
//  {
    // static::deleted(function ($data){
    //     $data->wife()->delete();
    // });

    // static::addGlobalScope('user',function(Builder $builder) {
    //         $builder->where('status',1);
    // });
    // static::addGlobalScope(new HubandScope);
//  }
// protected static function booted():void{
//     static::addGlobalScope('user',function(Builder $builder){
//          $builder->where('name','jamal');


//     });
// }

public function scopeStatus($q,$data){
        return $q->where('status',$data);
}
public function scopeCity($q,$city){
    return $q->whereIn('city',$city);
}

public function scopeName($q,$name){
    return $q->orderBy('name','desc');
}





}
