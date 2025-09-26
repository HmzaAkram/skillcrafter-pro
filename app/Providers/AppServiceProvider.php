<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\Mail\Transport\ResendTransport;
use Illuminate\Support\Facades\Mail;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Mail::extend('resend', function () {
        return new ResendTransport(env('RESEND_API_KEY'));
    });
        if ($this->app->environment('production')) {
            URL::forceScheme('https');   // Force HTTPS scheme
        }
    }
}
