<?php

namespace App\Providers;

use App\Medlab\Traits\UsefulViewFunctions;
use App\Medlab\ShoppingCart\ShoppingCart;
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
        $this->registerViewComposer();
        $this->shoppingCartViewComposer();
        $this->adminViewComposer();
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

    private function registerViewComposer()
    {
        //
        // Guest Patient Registration Page
        //
        view()->composer('pages.account.register.patient.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
        });

        //
        // Guest Practitioner Registration Page
        //
        view()->composer('pages.account.register.practitioner.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
            $view->with('businessTypeList', $this->createBusinessTypeList());
        });
    }

    private function accountViewComposer()
    {
        //
        // Dashboard Order List
        //
        /*
        view()->composer('pages.account.dashboard.order.details.index', function($view) {

            $view->with('country', $this->createCountryList());
        });
        */

        //
        // Dashboard Patient Edit
        //
        view()->composer('pages.account.dashboard.patient.edit.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
        });

        //
        // Dashboard Practitioner Edit
        //
        view()->composer('pages.account.dashboard.practitioner.edit.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
        });
    }

    private function navigationViewComposer()
    {
        //
        // Login Navigation Shopping Cart link
        //
        view()->composer('partial.navigation', function($view) {

            $repository = App::make('App\Medlab\Repositories\ShoppingCartRepositoryInterface');
            $guard = App::make('Illuminate\Contracts\Auth\Guard');
            $session = App::make('Illuminate\Session\Store');
            $shoppingCart = new ShoppingCart($repository, $session, $guard);
            $shoppingCart->retrieveBasket();
            $view->with('shoppingCart', $shoppingCart);
        });

        //
        // Admin Dashboard Left Navigation
        //
        view()->composer('pages.account.dashboard.admin._sharedpartial.sidenavigation', function($view) {

            $repository = App::make('App\Medlab\Repositories\AdminRepositoryInterface');
            $unapprovedPatientRegistrationList = $repository->getUnapprovedPatientRegistrationList();
            $unapprovedPractitionerRegistrationList = $repository->getUnapprovedPractitionerRegistrationList();
            $newOrderList = $repository->getNewOrderList();

            $view->with('unapprovedPatientRegistrationList', $unapprovedPatientRegistrationList);
            $view->with('unapprovedPractitionerRegistrationList', $unapprovedPractitionerRegistrationList);
            $view->with('newOrderList', $newOrderList);
        });
    }

    private function shoppingCartViewComposer()
    {
        //
        // Shopping Cart Billing and Shipping Address Edit
        //
        view()->composer('pages.shoppingcart.address.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
        });

        //
        // Shopping Cart Stripe Payment
        //
        view()->composer('pages.shoppingcart.payment.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
            $view->with('monthList', $this->createMonthList());
            $view->with('yearList', $this->createYearList());
        });

        //
        // Shopping Cart Checkout Summary
        //
        /*
        view()->composer('pages.shoppingcart.summary.index', function($view) {

            $view->with('country', $this->createCountryList());
        });
        */

        //
        // Order information page after checkout
        //
        /*
        view()->composer('pages.shoppingcart.order.index', function($view) {

            $view->with('country', $this->createCountryList());
        });
        */

        //
        // Shopping Cart Order Received Email
        //
        /*
        view()->composer('emails.new_order_received', function($view) {

            $view->with('country', $this->createCountryList());
        });
        */
    }

    private function adminViewComposer()
    {
        //
        // Admin View Order Details
        //
        /*
        view()->composer('pages.account.dashboard.admin.order.details.index', function($view) {

            $view->with('country', $this->createCountryList());
        });
        */

        //
        // Admin Patient Account Registration Deleted
        //
        view()->composer('pages.account.dashboard.admin.patientregistration.deleted.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
        });

        //
        // Admin Patient Account Registration New
        //
        view()->composer('pages.account.dashboard.admin.patientregistration.new.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
        });

        //
        // Admin Patient Account Registration Approved
        //
        view()->composer('pages.account.dashboard.admin.patientregistration.approved.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
        });

        //
        // Admin Patient Account Registration Create Practitioner
        //
        view()->composer('pages.account.dashboard.admin.practitionerregistration.frompatient.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
            $view->with('businessTypeList', $this->createBusinessTypeList());
        });

        //
        // Admin Practitioner Account Registration Deleted
        //
        view()->composer('pages.account.dashboard.admin.practitionerregistration.deleted.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
            $view->with('businessTypeList', $this->createBusinessTypeList());
        });

        //
        // Admin Practitioner Account Registration New
        //
        view()->composer('pages.account.dashboard.admin.practitionerregistration.new.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
            $view->with('businessTypeList', $this->createBusinessTypeList());
        });

        //
        // Admin Practitioner Account Registration Approved
        //
        view()->composer('pages.account.dashboard.admin.practitionerregistration.approved.index', function($view) {

            $view->with('country', $this->createCountryList());
            $view->with('auState', $this->createAuStateList());
            $view->with('nzRegion', $this->createNzRegionList());
            $view->with('titleList', $this->createTitleList());
            $view->with('businessTypeList', $this->createBusinessTypeList());
        });

        //
        // Admin Order Management
        //
        view()->composer('pages.account.dashboard.admin.order.main.index', function($view) {

            $orderStatusList = [
                'Order Received' => 'Order Received',
                'Order Canceled' => 'Order Canceled',
                'Order Dispatched' => 'Order Dispatched',
                'Order On-hold' => 'Order On-hold',
            ];

            $view->with('orderStatusList', $orderStatusList);
        });
    }
}
