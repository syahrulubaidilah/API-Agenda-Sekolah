<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         // mendaftarkan contact 
        $this->app->when('App\Http\Controllers\UserController')
            ->needs('App\Domain\Contracts\UserInterface')
            ->give('App\Domain\Repositories\UserRepository');
        $this->app->when('App\Http\Controllers\ActivityController')
            ->needs('App\Domain\Contracts\ActivityInterface')
            ->give('App\Domain\Repositories\ActivityRepository');
        
    }
}
