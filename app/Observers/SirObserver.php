<?php

namespace App\Observers;

use App\Models\Sir;
use Illuminate\Support\Str;

class SirObserver
{
    /**
     * Handle the Sir "created" event.
     */
    public function created(Sir $sir): void
    {
        //
    }

    /**
     * Handle the Sir "updated" event.
     */
    public function updated(Sir $sir): void
    {
        //
    }

    /**
     * Handle the Sir "deleted" event.
     */
    public function deleted(Sir $sir): void
    {
        $sir->miss()->delete();
    }

    /**
     * Handle the Sir "restored" event.
     */
    public function restored(Sir $sir): void
    {
        //
    }

    /**
     * Handle the Sir "force deleted" event.
     */
    public function forceDeleted(Sir $sir): void
    {
        //
    }

    public function saving(Sir $sir): void
    {
       $sir->sir_name =  Str::slug($sir->sir_name,'_');
    }
}
