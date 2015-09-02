<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
        Validator::extend('validState', 'App\Http\Requests\validator\AddressValidator@validState');
        Validator::replacer('validState', 'App\Http\Requests\validator\AddressValidator@validStateError');

        Validator::extend('validCountry', 'App\Http\Requests\validator\AddressValidator@validCountry');
        Validator::replacer('validCountry', 'App\Http\Requests\validator\AddressValidator@validCountryError');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}