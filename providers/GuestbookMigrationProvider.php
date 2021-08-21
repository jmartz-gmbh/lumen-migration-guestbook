<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class GuestbookMigrationProvider
 * @package App\Providers
 */
class GuestbookMigrationProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
