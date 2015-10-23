<?php

namespace App\Providers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('validState', 'App\Medlab\Validators\AddressValidator@validState');
        Validator::replacer('validState', 'App\Medlab\Validators\AddressValidator@validStateError');

        Validator::extend('validCountry', 'App\Medlab\Validators\AddressValidator@validCountry');
        Validator::replacer('validCountry', 'App\Medlab\Validators\AddressValidator@validCountryError');

        Validator::extend('validTitle', 'App\Medlab\Validators\RegisterValidator@validTitle');
        Validator::replacer('validTitle', 'App\Medlab\Validators\RegisterValidator@validTitleError');

        Validator::extend('validBusinessType', 'App\Medlab\Validators\RegisterValidator@validBusinessType');
        Validator::replacer('validBusinessType', 'App\Medlab\Validators\RegisterValidator@validBusinessTypeError');

        Validator::extend('validABN', 'App\Medlab\Validators\RegisterValidator@validABN');
        Validator::replacer('validABN', 'App\Medlab\Validators\RegisterValidator@validABNError');

        Validator::extend('validPaymentOption', 'App\Medlab\Validators\ShoppingCartValidator@validPaymentOption');
        Validator::replacer('validPaymentOption', 'App\Medlab\Validators\ShoppingCartValidator@validPaymentOptionError');

        Validator::extend('ValidOrderStatus', 'App\Medlab\Validators\OrderValidator@validOrderStatus');
        Validator::replacer('ValidOrderStatus', 'App\Medlab\Validators\OrderValidator@validOrderStatusError');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
