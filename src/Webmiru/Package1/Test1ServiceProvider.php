<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Webmiru\Package1\Test1;

class Test1ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() : void
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {
        $this->app->bind('test1', function($app) {
            return new Test1();
        });
    }
}