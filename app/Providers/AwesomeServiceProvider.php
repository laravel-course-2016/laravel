<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AwesomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $this->app->singleton('App\Classes\AwesomeClass', function ($app) use ($request) {
            var_dump($request);
            $instance = new \App\Classes\AwesomeClass();
            $instance->incCounter();
            return $instance;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
