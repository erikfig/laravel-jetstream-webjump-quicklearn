<?php

namespace ErikFig\Core\StarterKit\Providers;

use Illuminate\Support\ServiceProvider;

class CoreStarterKitProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        $this->publishes([
            __DIR__.'/../../resources/js' => resource_path('js'),
        ], 'js');

        $this->publishes([
            __DIR__.'/../../resources/lang' => resource_path('lang'),
        ], 'lang');
    }
}
