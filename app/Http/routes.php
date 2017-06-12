<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home.index');
});
Route::get('/index.html', function () {
    return view('pages.home.index');
});

///////////////////////////////////////////////////////////////////////////////////
//
// Login
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/account/login', 'LoginController@getLogin');

Route::post('/account/login', 'LoginController@postLogin');

Route::get('/account/logout', 'LoginController@getLogout');

Route::get('/account/register', function() {
    return redirect('/account/login');
});

Route::get('/account/register/practitioner', 'LoginController@getRegisterPractitioner');

Route::post('/account/register/practitioner', 'LoginController@postRegisterPractitioner');

Route::get('/account/register/patient', 'LoginController@getRegisterPatient');

Route::post('/account/register/patient', 'LoginController@postRegisterPatient');

Route::get('/account/recovery', 'Auth\PasswordController@getEmail');

Route::post('/account/recovery', 'Auth\PasswordController@postEmail');

Route::get('/account/reset', function() {
    return redirect('/account/recovery');
});

Route::get('/account/reset/{token}', 'Auth\PasswordController@getReset');

Route::post('/account/reset', 'Auth\PasswordController@postReset');


///////////////////////////////////////////////////////////////////////////////////
//
// Search
//
///////////////////////////////////////////////////////////////////////////////////

Route::post('/search/getpractitionerlist', 'SearchController@postGetPractitionerList');


///////////////////////////////////////////////////////////////////////////////////
//
// Account
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/account', 'AccountController@dashboard');

Route::get('/account/edit', 'AccountController@getEdit');

Route::post('/account/edit/email', 'AccountController@postEmail');

Route::post('/account/edit/password', 'AccountController@postPassword');

Route::post('/account/edit/newsletter', 'AccountController@postNewsletter');

Route::post('/account/edit/address', 'AccountController@postAddress');

Route::get('/account/orders', 'AccountController@getOrdersOverview');

Route::post('/account/orders/details', 'AccountController@postOrderDetails');

///////////////////////////////////////////////////////////////////////////////////
//
// Patient History Intake
//
///////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix' => '/account/patient-history'], function() {

    Route::get('/', 'PatientHistoryController@index');

    Route::get('new', 'PatientHistoryController@pageCreate');

    Route::post('new', [
        'as'   => 'account.patient-history.store',
        'uses' => 'PatientHistoryController@store'
    ]);

    Route::get('{history}/page{page}', [
        'as'   => 'account.patient-history.edit',
        'uses' => 'PatientHistoryController@pageEdit',
    ]);

    Route::post('{history}', [
        'as'   => 'account.patient-history.update',
        'uses' => 'PatientHistoryController@update',
    ]);
});


///////////////////////////////////////////////////////////////////////////////////
//
// Nutraceuticals
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/nutraceuticals', 'NutraceuticalsController@products');

Route::get('/nutraceuticals/products', 'NutraceuticalsController@products');

Route::get('/nutraceuticals/products/{productSlug}', 'NutraceuticalsController@showProduct');

Route::get('/nutraceuticals/categories', 'NutraceuticalsController@categories');

Route::get('/nutraceuticals/categories/{categorySlug}', 'NutraceuticalsController@showCategory');

Route::get('/nutraceuticals/ingredients', 'NutraceuticalsController@ingredients');

Route::group(['middleware' => 'authPractitioner'], function () {

    Route::get('/nutraceuticals/praceducationalresource', 'NutraceuticalsController@faq');

});

Route::get('/nutraceuticals/nrgbiotic', function () {
    return view('pages.nutraceuticals.nrgbiotic.index');
});

///////////////////////////////////////////////////////////////////////////////////
//
// Shopping Cart
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/shoppingcart/cart', 'ShoppingCartController@getShoppingCart');

Route::post('/shoppingcart/update', 'ShoppingCartController@postShoppingCart');

Route::get('/shoppingcart/address', 'ShoppingCartController@getAddress');

Route::post('/shoppingcart/address', 'ShoppingCartController@postAddress');

Route::get('/shoppingcart/summary', 'ShoppingCartController@getSummary');

Route::post('/shoppingcart/checkout', 'ShoppingCartController@postCheckout');

Route::post('/shoppingcart/digitalorder', 'ShoppingCartController@postCommWebDigitalOrder');

Route::get('/shoppingcart/digitalreceipt', 'ShoppingCartController@getCommWebDigitalReceipt');

Route::get('/shoppingcart/digitalcheckout', 'ShoppingCartController@getCommWebCheckOut');

///////////////////////////////////////////////////////////////////////////////////
//
// Educations
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/education', function () {
    return redirect('/education/publications');
});

Route::get('/education/publications', function () {
    return view('pages.education.paper.index');
});

Route::get('/education/webinars', function () {
    return view('pages.education.webinars.index');
});

Route::get('/education/practitioner-education', function () {
    return view('pages.education.practitioner-education.index');
});

Route::group(['middleware' => 'authPractitioner'], function () {


    Route::get('/education/webinars/dehydration', function () {
        return view('pages.education.webinars.dehydration.index');
    });

    Route::get('/education/webinars/depression', function () {
        return view('pages.education.webinars.depression.index');
    });

    Route::get('/education/webinars/nafld', function () {
        return view('pages.education.webinars.nafld.index');
    });

    Route::get('/education/webinars/nanocelle', function () {
        return view('pages.education.webinars.nanocelle.index');
    });

    Route::get('/education/webinars/nrgwebinar', function () {
        return view('pages.education.webinars.nrgwebinar.index');
    });

    Route::get('/education/webinars/probiotics', function () {
        return view('pages.education.webinars.probiotics.index');
    });

});



///////////////////////////////////////////////////////////////////////////////////
//
// Help
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/help', function () {
    return view('pages.help.website-registration.index');
});

Route::get('/help/website-registration', function () {
    return view('pages.help.website-registration.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Order
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/order', function () {
    return view('pages.order.order.index');
});

Route::get('/order/order-and-stocking', function () {
    return view('pages.order.order-and-stocking.index');
});

Route::get('/order/payment-pricing-and-discounts', function () {
    return view('pages.order.payment-pricing-and-discounts.index');
});

Route::get('/order/returns', function () {
    return view('pages.order.returns.index');
});

Route::get('/order/shipping-and-delivery', function () {
    return view('pages.order.shipping-and-delivery.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Investor
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/investor', function () {
    return view('pages.investor.investor.index');
});

Route::get('/investor/corporate-governance', function () {
    return view('pages.investor.corporate-governance.index');
});

Route::get('/investor/prospectus', function () {
    return view('pages.investor.prospectus.index');
});

Route::get('/investor/asx-announcements', function () {
    return view('pages.investor.asx-announcements.index');
});

Route::get('/investor/share-price', function () {
    return view('pages.investor.share-price.index');
});



///////////////////////////////////////////////////////////////////////////////////
//
// Policies
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/policies', function () {
    return view('pages.policies.policies.index');
});

Route::get('/policies/privacy-policy', function () {
    return view('pages.policies.privacy-policy.index');
});

Route::get('/policies/terms-and-conditions', function () {
    return view('pages.policies.terms-and-conditions.index');
});

Route::get('/policies/medlab-sales-policy', function () {
    return view('pages.policies.medlab-sales-policy.index');
});

Route::get('/policies/faq', function () {
    return view('pages.policies.faq.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Research
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/research', function () {
    return view('pages.research.research.index');
});

Route::get('/research/why-medlab', function () {
    return view('pages.research.why-medlab.index');
});

Route::get('/research/the-medlab-solution', function () {
    return view('pages.research.the-medlab-solution.index');
});

Route::get('/research/medlab-delivery-platform', function () {
    return view('pages.research.what-is-nanotechnology.index');
});

Route::get('/research/patents', function () {
    return view('pages.research.patents.index');
});

Route::get('/research/clinical-trails', function () {
    return view('pages.research.clinical-trails.index');
});

Route::get('/research/medlab-cell-line', function () {
    return view('pages.research.medlab-cell-line.index');
});

Route::get('/research/splash', function () {
    return view('pages.research.splash.index');
});






///////////////////////////////////////////////////////////////////////////////////
//
// About pages
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/about', function () {
    return view('pages.about.about-us.index');
});

Route::get('/about/about-medlab', function () {
    return view('pages.about.about-medlab.index');
});

Route::get('/about/who-we-are', function () {
    return view('pages.about.who-we-are.index');
});

Route::get('/about/our-past', function () {
    return view('pages.about.our-past.index');
});

Route::get('/about/a-new-era', function () {
    return view('pages.about.a-new-era.index');
});

Route::get('/about/executive-team', function () {
    return view('pages.about.executive-team.index');
});

Route::get('/about/consulting-team', function () {
    return view('pages.about.consulting-team.index');
});

Route::get('/about/scientific-team', function () {
    return view('pages.about.scientific-team.index');
});

Route::get('/about/board-of-directors', function () {
    return view('pages.about.board-of-directors.index');
});

Route::get('/about/letter-from-ceo', function () {
    return view('pages.about.letter-from-ceo.index');
});

Route::get('/about/careers', function () {
    return view('pages.about.careers.index');
});

///////////////////////////////////////////////////////////////////////////////////
//
// Efficacy pages
//
///////////////////////////////////////////////////////////////////////////////////

Route::group(['middleware' => 'authPractitioner'], function () {

    Route::get('/efficacy/magazine_sn16', function () {
        return view('pages.efficacy.magazine_sn16.index');
    });

    Route::get('/efficacy/magazine_df16', function () {
        return view('pages.efficacy.magazine_df16.index');
    });

    Route::get('/efficacy/magazine_mm17', function () {
        return view('pages.efficacy.magazine_mm17.index');
    });

    Route::get('/efficacy/podcast', function () {
        return view('pages.efficacy.podcast.index');
    });




});

Route::get('/efficacy/novel-adjunct-for-depression', function () {
    return view('pages.efficacy.novel-adjunct-for-depression.index');
});

Route::get('/efficacy/human-ageing', function () {
    return view('pages.efficacy.human-ageing.index');
});

Route::get('/efficacy/optimising-skeletal-muscle-function', function () {
    return view('pages.efficacy.optimising-skeletal-muscle-function.index');
});

Route::get('/efficacy/obesity-intestinal-inflammation-and-probiotics', function () {
    return view('pages.efficacy.obesity-intestinal-inflammation-and-probiotics.index');
});

Route::get('/efficacy/role-of-bacteria-in-git-conditions', function () {
    return view('pages.efficacy.role-of-bacteria-in-git-conditions.index');
});

Route::get('/efficacy/optimising-immunity-in-preparation-for-cold-and-flu-season', function () {
    return view('pages.efficacy.optimising-immunity.index');
});

Route::get('/efficacy/vitamin-d-your-best-defence', function () {
    return view('pages.efficacy.vitamin-d-your-best-defence.index');
});

Route::get('/efficacy/efficacy', function () {
    return view('pages.efficacy.efficacy.index');
});


Route::get('/efficacy/magazine_preview', function () {
    return view('pages.efficacy.magazine_preview.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Practitioner Only pages
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/education/practitioner-education/{product_slug}', 'PractitionerOnlyController@redirect_practitioner_education');

Route::get('/nutraceuticals/products/{productSlug}/cmi/{language}', "PractitionerOnlyController@redirect_cmi")
    ->where('language', '^(arabic|chinese|english|french|italian|japanese|russian|spanish|traditional_chinese)$');

Route::get('/nutraceuticals/products/{productSlug}/info/{language}', 'PractitionerOnlyController@getProductCMI')
    ->where('language', '^(arabic|chinese|english|french|italian|japanese|russian|spanish|traditional_chinese)$');


///////////////////////////////////////////////////////////////////////////////////
//
// Contact pages
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/contact', 'ContactController@getShowContactInformation');

Route::post('/contact', 'ContactController@postSendEnquiryEmail');
