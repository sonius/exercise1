<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CinemaServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('\App\InterfaceCinema', function($app) {
            return new \App\Cinema();
        });
        
        $this->app->bind('\App\InterfaceMovie', function($app) {
            return new \App\Movie();
        });
    }

}
