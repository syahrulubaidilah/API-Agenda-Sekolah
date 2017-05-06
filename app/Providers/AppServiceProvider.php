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
        $this->app->when('App\Http\Controllers\GuruController')
            ->needs('App\Domain\Contracts\GuruInterface')
            ->give('App\Domain\Repositories\GuruRepository');
        $this->app->when('App\Http\Controllers\SiswaController')
            ->needs('App\Domain\Contracts\SiswaInterface')
            ->give('App\Domain\Repositories\SiswaRepository');
        $this->app->when('App\Http\Controllers\ActivityController')
            ->needs('App\Domain\Contracts\ActivityInterface')
            ->give('App\Domain\Repositories\ActivityRepository');
        
    }
}
