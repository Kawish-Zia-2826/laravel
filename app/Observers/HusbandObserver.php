<?php

namespace App\Observers;


use App\Models\Husband;
use Illuminate\Support\Str;

class HusbandObserver
{
    /**
     * Handle the Husband "created" event.
     */
    public function created(Husband $husband): void
    {
        //
    }

    /**
     * Handle the Husband "updated" event.
     */
    public function updated(Husband $husband): void
    {
        //
    }

    /**
     * Handle the Husband "deleted" event.
     */
    public function deleted(Husband $husband): void
    {
        $husband->wife()->delete();
    }

    /**
     * Handle the Husband "restored" event.
     */
    public function restored(Husband $husband): void
    {
        //
    }

    /**
     * Handle the Husband "force deleted" event.
     */
    public function forceDeleted(Husband $husband): void
    {
        
    }
    public function saving(Husband $husband): void
    {
        $husband->name = Str::slug($husband->name,'_');
    }
   
}
