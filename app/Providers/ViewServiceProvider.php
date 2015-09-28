<?php

namespace App\Providers;

use App\Library\Traits\UsefulViewFunctions;
use App\Library\ShoppingCart\ShoppingCart;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    use UsefulViewFunctions;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->navigationViewComposer();
        $this->shoppingCartViewComposer();
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

    private function navigationViewComposer()
    {
        view()->composer('partial.navigation', function($view) {

            $view->with('shoppingCart', new ShoppingCart());
        });
    }

    private function shoppingCartViewComposer()
    {
        view()->composer('pages.shoppingcart.address.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
        });

        view()->composer('pages.shoppingcart.payment.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
            $view->with('monthList', $this->createMonthList());
            $view->with('yearList', $this->createYearList());
        });

        view()->composer('pages.shoppingcart.summary.index', function($view) {

            $view->with('country', $this->createCountryList());
        });
    }
}
