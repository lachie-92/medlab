<?php

namespace App\Providers;

use App\Patient_Registration;
use App\Practitioner_Registration;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

use App\Product;
use App\Ingredient;
use App\Category;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        $router->bind('productId', function($id){

            return Product::where('idProduct', '=', $id)->firstOrFail();
        });

        $router->bind('categoryId', function($id){

            return Category::where('idCategory', '=', $id)->firstOrFail();
        });

        $router->bind('patientRegistrationId', function($id){

            return Patient_Registration::where('id', '=', $id)->firstOrFail();
        });

        $router->bind('practitionerRegistrationId', function($id){

            return Practitioner_Registration::where('id', '=', $id)->firstOrFail();
        });

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
