<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\Mail\Transport\ResendTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\MailManager;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
      $this->app->make(MailManager::class)->extend('resend', function () {
        return new ResendTransport(config('services.resend.key'));
    });
        if ($this->app->environment('production')) {
            URL::forceScheme('https');   // Force HTTPS scheme
        }
    }
}
