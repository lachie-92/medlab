<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use XeroOAuth;

class XeroServiceProvider extends ServiceProvider
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
        $this->app->bind('XeroOAuth', function()
        {
            $XeroOAuth = new XeroOAuth(Config::get('xero.signatures'));

            return $XeroOAuth;
        });
    }
}
