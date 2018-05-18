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
            'App\Medlab\Billing\BillingInterface',
            'App\Medlab\Billing\StripeBilling'
        );

        $this->app->bind(
            'App\Medlab\Repositories\AccountRepositoryInterface',
            'App\Medlab\Repositories\AccountRepository'
        );

        $this->app->bind(
            'App\Medlab\Repositories\AdminRepositoryInterface',
            'App\Medlab\Repositories\AdminRepository'
        );

        $this->app->bind(
            'App\Medlab\Repositories\RegistrationRepositoryInterface',
            'App\Medlab\Repositories\RegistrationRepository'
        );

        $this->app->bind(
            'App\Medlab\Repositories\SearchRepositoryInterface',
            'App\Medlab\Repositories\SearchRepository'
        );

        $this->app->bind(
            'App\Medlab\Repositories\ShoppingCartRepositoryInterface',
            'App\Medlab\Repositories\ShoppingCartRepository'
        );
    }
}
