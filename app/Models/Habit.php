<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
   protected $table = 'habits_of_human';
//    use HasUuids; // Enables UUIDs automatically
   protected $primaryKey = 'habit_id';
   public $incrementing  = false;
   protected $keyType = "string";
   protected $dateFormat  = 'U';
   const CREATED_AT = 'creation_at';
   const UPDATED_AT = 'updation_at';
   protected $attributes = [
    'age'=>28,
    'city'=>'karachi'
   ];
   public $timestamps = false;
   use HasUlids;


}
