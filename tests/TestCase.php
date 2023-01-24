<?php

namespace LaravelersAcademy\LaravelPackage\Tests;

use LaravelersAcademy\LaravelPackage\Providers\LaravelAppServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{

    public function setUp(): void
    {
        
        parent::setUp();
        // additional setup

    }

    protected function getPackageProviders($app)
    {
        
        return [
            LaravelAppServiceProvider::class,
        ];

    }

    protected function getEnvironmentSetUp($app)
    {
        
        // perform environment setup

    }

}