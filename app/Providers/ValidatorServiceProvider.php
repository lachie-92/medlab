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
        Validator::extend('validState', 'App\Library\Validators\AddressValidator@validState');
        Validator::replacer('validState', 'App\Library\Validators\AddressValidator@validStateError');

        Validator::extend('validCountry', 'App\Library\Validators\AddressValidator@validCountry');
        Validator::replacer('validCountry', 'App\Library\Validators\AddressValidator@validCountryError');

        Validator::extend('validTitle', 'App\Library\Validators\RegisterValidator@validTitle');
        Validator::replacer('validTitle', 'App\Library\Validators\RegisterValidator@validTitleError');

        Validator::extend('validBusinessType', 'App\Library\Validators\RegisterValidator@validBusinessType');
        Validator::replacer('validBusinessType', 'App\Library\Validators\RegisterValidator@validBusinessTypeError');

        Validator::extend('validABN', 'App\Library\Validators\RegisterValidator@validABN');
        Validator::replacer('validABN', 'App\Library\Validators\RegisterValidator@validABNError');

        Validator::extend('validPaymentOption', 'App\Library\Validators\ShoppingCartValidator@validPaymentOption');
        Validator::replacer('validPaymentOption', 'App\Library\Validators\ShoppingCartValidator@validPaymentOptionError');

        Validator::extend('ValidOrderStatus', 'App\Library\Validators\OrderValidator@validOrderStatus');
        Validator::replacer('ValidOrderStatus', 'App\Library\Validators\OrderValidator@validOrderStatusError');
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
