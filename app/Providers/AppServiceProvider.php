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

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Library\Repositories\ShoppingCartRepositoryInterface',
            'App\Library\Repositories\ShoppingCartRepository'
        );

        $this->app->bind(
            'App\Library\Billing\BillingInterface',
            'App\Library\Billing\BraintreeBilling'
        );
    }
}