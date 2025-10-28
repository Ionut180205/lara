<?php

namespace App\Providers;

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
        // Dacă suntem în producție, forțăm schema HTTPS ca să nu apară mixed content.
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
