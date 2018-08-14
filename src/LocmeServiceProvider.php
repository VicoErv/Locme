<?php

namespace VicoErv\Locme;

use Illuminate\Support\ServiceProvider;

class LocmeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * 
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes/web.php';
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'locme');
        
        $this->publishes([
            __DIR__ . '/config/locme.php'    => config_path('locme.php'),
            __DIR__ . '/resources/assets/js' => base_path('resources/assets/js'),
        ]);
    }

    /**
     * Register the application services.
     * 
     * @return void
     */
    public function register()
    {
        $this->app->make(\VicoErv\Locme\Controllers\HomeController::class);
        
        $this->mergeConfigFrom(
            __DIR__.'/config/locme.php', 'locme'
        );
    }
}