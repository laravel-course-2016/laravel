<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AwesomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Classes\AwesomeClass', function ($app) {
            $instance = new \App\Classes\AwesomeClass();
            $instance->incCounter();
            return $instance;
        });
    }
}
