<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Mandrill;

class MandrillServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Mandrill', function()
        {
            $mandrill = new Mandrill(
                Config::get('services.mandrill.secret')
            );

            return $mandrill;
        });
    }
}
