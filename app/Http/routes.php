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

///////////////////////////////////////////////////////////////////////////////////
//
// Nutraceuticals
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/nutraceuticals', 'NutraceuticalsController@product');

Route::get('/nutraceuticals/products', 'NutraceuticalsController@product');

Route::get('/nutraceuticals/products/{productId}', 'NutraceuticalsController@show');

Route::get('/nutraceuticals/ingredients', 'NutraceuticalsController@ingredients');

Route::get('/nutraceuticals/ingredients/{ingredientId}', 'NutraceuticalsController@ingredients');




///////////////////////////////////////////////////////////////////////////////////
//
// Educations
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('education', function () {
    return view('pages.education.education.index');
});

Route::get('education/publications', function () {
    return view('pages.education.publications.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Newsletter
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('newsletter', function () {
    return view('pages.newsletter.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Help
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('help', function () {
    return view('pages.help.website-registration.index');
});

Route::get('help/website-registration', function () {
    return view('pages.help.website-registration.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Order
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('order', function () {
    return view('pages.order.order.index');
});

Route::get('order/order-and-stocking', function () {
    return view('pages.order.order-and-stocking.index');
});

Route::get('order/patient-management-tool', function () {
    return view('pages.order.patient-management-tool.index');
});

Route::get('order/payment-pricing-and-discounts', function () {
    return view('pages.order.payment-pricing-and-discounts.index');
});

Route::get('order/returns', function () {
    return view('pages.order.returns.index');
});

Route::get('order/shipping-and-delivery', function () {
    return view('pages.order.shipping-and-delivery.index');
});

Route::get('order/website-access-and-registration-benefits', function () {
    return view('pages.order.website-access-and-registration-benefits.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Investor
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('investor', function () {
    return view('pages.investor.investor.index');
});

Route::get('investor/corporate-governance', function () {
    return view('pages.investor.corporate-governance.index');
});

Route::get('investor/prospectus', function () {
    return view('pages.investor.prospectus.index');
});

Route::get('investor/asx-announcements', function () {
    return view('pages.investor.asx-announcements.index');
});

Route::get('investor/share-price', function () {
    return view('pages.investor.share-price.index');
});



///////////////////////////////////////////////////////////////////////////////////
//
// Policies
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('policies', function () {
    return view('pages.policies.privacy-policy.index');
});

Route::get('policies/privacy-policy', function () {
    return view('pages.policies.privacy-policy.index');
});

Route::get('policies/terms-and-conditions', function () {
    return view('pages.policies.terms-and-conditions.index');
});

Route::get('policies/medlab-sales-policy', function () {
    return view('pages.policies.medlab-sales-policy.index');
});

Route::get('policies/faq', function () {
    return view('pages.policies.faq.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Research
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('research', function () {
    return view('pages.research.research.index');
});

Route::get('research/why-medlab', function () {
    return view('pages.research.why-medlab.index');
});

Route::get('research/the-medlab-solution', function () {
    return view('pages.research.the-medlab-solution.index');
});

Route::get('research/medlab-delivery-platform', function () {
    return view('pages.research.medlab-delivery-platform.index');
});

Route::get('research/registration', function () {
    return view('pages.research.research-registration.index');
});

Route::get('research/patents', function () {
    return view('pages.research.patents.index');
});

Route::get('research/clinical-trails', function () {
    return view('pages.research.clinical-trails.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// About pages
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('about', function () {
    return view('pages.about.about-us.index');
});

Route::get('about/board-of-directors', function () {
    return view('pages.about.board-of-directors.index');
});

Route::get('about/company-culture', function () {
    return view('pages.about.company-culture.index');
});

Route::get('about/consulting-team', function () {
    return view('pages.about.consulting-team.index');
});

Route::get('about/letter-from-ceo', function () {
    return view('pages.about.letter-from-ceo.index');
});

Route::get('about/management-team', function () {
    return view('pages.about.management-team.index');
});

Route::get('about/our-company', function () {
    return view('pages.about.our-company.index');
});

Route::get('about/scientific-team', function () {
    return view('pages.about.scientific-team.index');
});


///////////////////////////////////////////////////////////////////////////////////
//
// Contact pages
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('contact', function () {
    return view('pages.contact.index');
});


