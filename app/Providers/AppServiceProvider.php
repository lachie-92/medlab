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

        Validator::extend('validTitle', 'App\Http\Requests\validator\RegisterValidator@validTitle');
        Validator::replacer('validTitle', 'App\Http\Requests\validator\RegisterValidator@validTitleError');

        Validator::extend('validBusinessType', 'App\Http\Requests\validator\RegisterValidator@validBusinessType');
        Validator::replacer('validBusinessType', 'App\Http\Requests\validator\RegisterValidator@validBusinessTypeError');

        Validator::extend('validABN', 'App\Http\Requests\validator\RegisterValidator@validABN');
        Validator::replacer('validABN', 'App\Http\Requests\validator\RegisterValidator@validABNError');
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