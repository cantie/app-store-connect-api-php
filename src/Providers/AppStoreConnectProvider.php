<?php

namespace Cantie\AppStoreConnect\Providers;

use Illuminate\Support\ServiceProvider;

class AppStoreConnectProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'appstore-connect');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/config.php');
        $this->publishes([$path => config_path('appstore-connect.php')], 'config');
    }
}
