<?php

namespace App\Observers;

use App\Models\Wife;

class WifeObserver
{
    /**
     * Handle the Wife "created" event.
     */
    public function created(Wife $wife): void
    {
        //
    }

    /**
     * Handle the Wife "updated" event.
     */
    public function updated(Wife $wife): void
    {
        //
    }

    /**
     * Handle the Wife "deleted" event.
     */
    public function deleted(Wife $wife): void
    {
        //
    }

    /**
     * Handle the Wife "restored" event.
     */
    public function restored(Wife $wife): void
    {
        //
    }

    /**
     * Handle the Wife "force deleted" event.
     */
    public function forceDeleted(Wife $wife): void
    {
        //
    }
    public function retrieved(Wife $wife): void
    {
        $wife->increment('counter');
    }
  
}
