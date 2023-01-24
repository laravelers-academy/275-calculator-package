<?php

namespace LaravelersAcademy\LaravelPackage\Providers;

use Illuminate\Support\ServiceProvider;
use LaravelersAcademy\LaravelPackage\Calculator;

class LaravelAppServiceProvider extends ServiceProvider
{

    public function register()
    {
        
        $this->app->bind('calculator', function($app) {
            return new Calculator();
        });

    }

    public function boot()
    {
        
        //

    }

}
