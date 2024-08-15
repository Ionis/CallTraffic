<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\StringToNumberService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(StringToNumberService::class, function () {
            return new StringToNumberService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
