<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Production me hamesha https force karo
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // Bootstrap pagination enable karo
        Paginator::useBootstrap();
    }
}
