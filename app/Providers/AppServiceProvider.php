<?php

namespace App\Providers;

use App\Models\Mis;
use App\Models\Sir;
use App\Models\Post;
use App\Models\User;
use App\Models\Wife;
use App\Models\Husband;
use App\Observers\SirObserver;
use App\Observers\MissObserver;
use App\Observers\PostObserver;
use App\Observers\UserObserver;
use App\Observers\WifeObserver;
use App\Observers\HusbandObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Post::observe(PostObserver::class);
        Husband::observe(HusbandObserver::class);
        Wife::observe(WifeObserver::class);
        Sir::observe(SirObserver::class);
        Mis::observe(MissObserver::class);
    
    }
}
