<?php

namespace Sallar\jDate;

use Illuminate\Support\ServiceProvider;

class jDateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
         $this->publishes([
            __DIR__.'/config/config.php' => config_path('jdate.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}