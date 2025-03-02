<?php

namespace App\Observers;

use App\Models\Mis;

class MissObserver
{
    /**
     * Handle the Mis "created" event.
     */
    public function created(Mis $mis): void
    {
        //
    }

    /**
     * Handle the Mis "updated" event.
     */
    public function updated(Mis $mis): void
    {
        //
    }

    /**
     * Handle the Mis "deleted" event.
     */
    public function deleted(Mis $mis): void
    {
        //
    }

    /**
     * Handle the Mis "restored" event.
     */
    public function restored(Mis $mis): void
    {
        //
    }

    /**
     * Handle the Mis "force deleted" event.
     */
    public function forceDeleted(Mis $mis): void
    {
        //
    }

    public function retrieved(Mis $mis): void
    {
        $mis->increment('miss_counter');

    }
    
}
