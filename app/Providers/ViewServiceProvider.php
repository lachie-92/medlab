<?php

namespace App\Providers;

use App\Library\Traits\UsefulViewFunctions;
use App\Library\ShoppingCart\ShoppingCart;
use Illuminate\Support\Facades\App;
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
        $this->accountViewComposer();
        $this->shoppingCartViewComposer();
        $this->adminViewCompoesr();
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

            $repository = App::make('App\Library\Repositories\ShoppingCartRepositoryInterface');
            $view->with('shoppingCart', new ShoppingCart($repository));
        });
    }

    private function accountViewComposer()
    {
        view()->composer('pages.account.dashboard.order.details.index', function($view) {

            $view->with('country', $this->createCountryList());
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

        view()->composer('pages.shoppingcart.order.index', function($view) {

            $view->with('country', $this->createCountryList());
        });

        view()->composer('emails.new_order_received', function($view) {

            $view->with('country', $this->createCountryList());
        });
    }

    private function adminViewCompoesr()
    {
        view()->composer('pages.account.dashboard.admin.order.details.index', function($view) {

            $view->with('country', $this->createCountryList());
        });
    }
}
