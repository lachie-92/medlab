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

Route::post('/account/register/patient/getpractitionerlist', 'LoginController@postGetPractitionerList');

Route::get('/account/recovery', 'Auth\PasswordController@getEmail');

Route::post('/account/recovery', 'Auth\PasswordController@postEmail');

Route::get('/account/reset', function() {
    return redirect('/account/recovery');
});

Route::get('/account/reset/{token}', 'Auth\PasswordController@getReset');

Route::post('/account/reset', 'Auth\PasswordController@postReset');


///////////////////////////////////////////////////////////////////////////////////
//
// Account
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/account', 'AccountController@dashboard');

Route::get('/account/edit', 'AccountController@getEdit');

Route::post('/account/edit/email', 'AccountController@postEmail');

Route::post('/account/edit/newsletter', 'AccountController@postNewsletter');

Route::post('/account/edit/address', 'AccountController@postAddress');

Route::get('/account/orders', 'AccountController@getOrdersOverview');

Route::post('/account/orders/details', 'AccountController@postOrderDetails');


///////////////////////////////////////////////////////////////////////////////////
//
// Admin
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/account/patient-registration', 'AdminController@getShowPatientRegistrations');

Route::get('/account/patient-registration/{patientRegistrationId}', 'AdminController@getPatientRegistration');

Route::post('/account/patient-registration/{patientRegistrationId}/delete', 'AdminController@postDeletePatientRegistration');

Route::post('/account/patient-registration/{patientRegistrationId}/restore', 'AdminController@postRestoreDeletedPatientRegistration');

Route::post('/account/patient-registration/{patientRegistrationId}/create', 'AdminController@postCreatePatientAccount');

Route::get('/account/practitioner-registration', 'AdminController@getShowPractitionerRegistrations');

Route::post('/account/practitioner-registration/getcompanylist', 'AdminController@postGetCompanyList');

Route::post('/account/practitioner-registration/createclinic', 'AdminController@postCreateCompany');

Route::get('/account/practitioner-registration/new/{patientRegistrationId}', 'AdminController@getNewPractitionerRegistration');

Route::post('/account/practitioner-registration/new/create', 'AdminController@postNewPractitionerRegistration');

Route::get('/account/practitioner-registration/{practitionerRegistrationId}', 'AdminController@getPractitionerRegistration');

Route::post('/account/practitioner-registration/{practitionerRegistrationId}/delete', 'AdminController@postDeletePractitionerRegistration');

Route::post('/account/practitioner-registration/{practitionerRegistrationId}/restore', 'AdminController@postRestoreDeletedPractitionerRegistration');

Route::post('/account/practitioner-registration/{practitionerRegistrationId}/create', 'AdminController@postCreatePractitionerAccount');

Route::get('/account/admin-orders', function() {
    return redirect('/account/admin-orders/received');
});

Route::get('/account/admin-orders/{display}', 'AdminController@getAdminShowOrders');

Route::post('/account/admin-orders/details', 'AdminController@postAdminOrderDetails');

Route::post('/account/admin-orders/update', 'AdminController@postAdminOrderUpdate');


///////////////////////////////////////////////////////////////////////////////////
//
// Nutraceuticals
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/nutraceuticals', 'NutraceuticalsController@products');

Route::get('/nutraceuticals/products', 'NutraceuticalsController@products');

Route::get('/nutraceuticals/products/{productId}', 'NutraceuticalsController@showProduct');

Route::get('/nutraceuticals/categories', 'NutraceuticalsController@categories');

Route::get('/nutraceuticals/categories/{categoryId}', 'NutraceuticalsController@showCategory');

Route::get('/nutraceuticals/ingredients', 'NutraceuticalsController@ingredients');

Route::get('/nutraceuticals/faq', 'NutraceuticalsController@faq');


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


///////////////////////////////////////////////////////////////////////////////////
//
// Educations
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/education', function () {
    return redirect('/education/publications');
});

Route::get('/education/publications', function () {
    return view('pages.education.publications.index');
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

Route::get('/order/patient-management-tool', function () {
    return view('pages.order.patient-management-tool.index');
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

Route::get('/order/website-access-and-registration-benefits', function () {
    return view('pages.order.website-access-and-registration-benefits.index');
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
    return view('pages.policies.privacy-policy.index');
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
    return view('pages.research.medlab-delivery-platform.index');
});

Route::get('/research/registration', function () {
    return view('pages.research.research-registration.index');
});

Route::get('/research/patents', function () {
    return view('pages.research.patents.index');
});

Route::get('/research/clinical-trails', function () {
    return view('pages.research.clinical-trails.index');
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


///////////////////////////////////////////////////////////////////////////////////
//
// Contact pages
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/contact', 'ContactController@getShowContactInformation');

Route::post('/contact', 'ContactController@postSendEnquiryEmail');
