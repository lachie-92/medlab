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
            'App\Medlab\Billing\BraintreeBilling'
        );

        $this->app->bind(
            'App\Medlab\Repositories\MedlabRepositoryInterface',
            'App\Medlab\Repositories\MySQLRepository'
        );
    }
}