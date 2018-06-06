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
    return view('pages.home.landing');
});
Route::get('/index.html', function () {
    return view('pages.home.landing');
});

///////////////////////////////////////////////////////////////////////////////////
//
// Login
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/account/login', 'LoginController@getLogin');

Route::post('/account/login', 'LoginController@postLogin');

Route::get('/account/logout', 'LoginController@getLogout');

Route::get('/account/register', function () {
    return redirect('/account/login');
});

Route::get('/account/register/practitioner', 'LoginController@getRegisterPractitioner');

Route::post('/account/register/practitioner', 'LoginController@postRegisterPractitioner');

Route::get('/account/register/patient', 'LoginController@getRegisterPatient');

Route::post('/account/register/patient', 'LoginController@postRegisterPatient');

Route::get('/account/recovery', 'Auth\PasswordController@getEmail');

Route::post('/account/recovery', 'Auth\PasswordController@postEmail');

Route::get('/account/reset', function () {
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

Route::get('/nutraceuticals/developement', function () {
    return view('pages.nutraceuticals.developement.index');
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
Route::get('/education/webinars/stress-and-fatigue', function () {
    return view('pages.education.webinars.stress.index');
});

Route::get('/education/webinars/register', function () {
    return view('pages.education.webinars.register.index');
});

Route::get('/education/webinars/recordings', function () {
    return view('pages.education.webinars.recordings.index');
});

Route::get('/education/webinars/recordings/2017-year-in-review', function () {
    return view('pages.education.webinars.2017-year-in-review.index');
});

Route::get('/education/giveaways', function () {
    return view('pages.education.giveaways.index');
});

Route::get('/patientrewards', function () {
    return view('pages.education.patient-rewards.index');
});

Route::get('/education/media-center', function () {
    return view('pages.education.media-center.index');
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

Route::get('/medical-cannabis/expression-of-interest', function () {
    return view('pages.medical-cannabis.index');
});

Route::get('medical-cannabis/application-form', function () {
    return view('pages.medical-cannabis.application-form.index');
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
// Corporate
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/corporate', function () {
    return view('pages.corporate.corporate.index');
});

Route::get('/corporate/corporate-governance', function () {
    return view('pages.corporate.corporate-governance.index');
});

Route::get('/corporate/prospectus', function () {
    return view('pages.corporate.prospectus.index');
});

Route::get('/corporate/asx-announcements', function () {
    return view('pages.corporate.asx-announcements.index');
});

Route::get('/corporate/share-price', function () {
    return view('pages.corporate.share-price.index');
});

Route::get('/corporate/executive-team', function () {
    return view('pages.corporate.executive-team.index');
});

Route::get('/corporate/consulting-team', function () {
    return view('pages.corporate.consulting-team.index');
});

///////////////////////////////////////////////////////////////////////////////////
//
// Investor Redirects
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/investor', function () {
    return Redirect::to('/corporate/investor');
});

Route::get('/investor/corporate-governance', function () {
    return Redirect::to('/corporate/corporate-governance');
});

Route::get('/investor/prospectus', function () {
    return Redirect::to('/corporate/prospectus');
});

Route::get('/investor/asx-announcements', function () {
    return Redirect::to('/corporate/asx-announcements');
});

Route::get('/investor/share-price', function () {
    return Redirect::to('/corporate/share-price');
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
    return view('pages.research.patents.index', [ 'patents' => App\Patent::all() ]);
});

Route::get('/research/clinical-trials', function () {
    return view('pages.research.clinical-trails.index');
});

Route::get('/research/scientific-team', function () {
    return view('pages.research.scientific-team.index');
});

Route::get('/research/medlab-cell-line', function () {
    return view('pages.research.medlab-cell-line.index');
});

Route::get('/research/splash', function () {
    return view('pages.research.splash.index');
});

Route::get('/research/clinical-trials/contract-1', function () {
    return view('pages.research.clinical-trails.contract-1.index');
});

Route::get('/research/clinical-trials/nanocelled3', function () {
    return view('pages.research.clinical-trails.nanocelled3.index');
});

Route::get('/research/clinical-trials/contract-2', function () {
    return view('pages.research.clinical-trails.contract-2.index');
});

Route::get('/research/clinical-trials/contract-3', function () {
    return view('pages.research.clinical-trails.contract-3.index');
});

Route::get('/research/clinical-trials/magnesium-orotate', function () {
    return view('pages.research.clinical-trails.magnesium-orotate.index');
});

Route::get('/research/clinical-trials/nanabidial', function () {
    return view('pages.research.clinical-trails.nanabidial.index');
});

Route::get('/research/clinical-trials/nanabidial-2', function () {
    return view('pages.research.clinical-trails.nanabidial-2.index');
});

Route::get('/research/clinical-trials/nanabis', function () {
    return view('pages.research.clinical-trails.nanabis.index');
});

Route::get('/research/clinical-trials/nanocelle-b12', function () {
    return view('pages.research.clinical-trails.nanocelle-b12.index');
});

Route::get('/research/clinical-trials/nanocelle-cbd', function () {
    return view('pages.research.clinical-trails.nanocelle-cbd.index');
});

Route::get('/research/clinical-trials/nanocelle-coq10', function () {
    return view('pages.research.clinical-trails.nanocelle-coq10.index');
});

Route::get('/research/clinical-trials/nanocelle-insulin', function () {
    return view('pages.research.clinical-trails.nanocelle-insulin.index');
});

Route::get('/research/clinical-trials/nanostat', function () {
    return view('pages.research.clinical-trails.nanostat.index');
});

Route::get('/research/clinical-trials/nrgbiotic', function () {
    return view('pages.research.clinical-trails.nrgbiotic.index');
});

Route::get('/research/clinical-trials/nrgbiotic-pilot', function () {
    return view('pages.research.clinical-trails.nrgbiotic-pilot.index');
});

Route::get('/research/clinical-trials/t2-biotic', function () {
    return view('pages.research.clinical-trails.t2-biotic.index');
});

Route::get('/research/clinical-trials/aborvitae', function () {
    return view('pages.research.clinical-trails.aborvitae.index');
});

Route::get('/EMS/NanaBis', function () {
    return view('pages.research.sas.nanabis.index');
});

Route::get('/EMS/Nanabis', function () {
    return view('pages.research.sas.nanabis.index');
});

Route::get('/ems/nanabis', function () {
    return view('pages.research.sas.nanabis.index');
});

Route::get('/EMS/NanaBidial', function () {
    return view('pages.research.sas.Nanabidial.index');
});

Route::get('/EMS/Nanabidial', function () {
    return view('pages.research.sas.Nanabidial.index');
});

Route::get('/ems/nanabidial', function () {
    return view('pages.research.sas.Nanabidial.index');
});


Route::get('/ems/nanabis/nanabis', function () {
    return view('pages.research.sas.index');
});


Route::get('/nanabis/seminar', function () {
    return view('pages.research.sas.nanabis.seminar.index');
});



///////////////////////////////////////////////////////////////////////////////////
//
// About pages
//
///////////////////////////////////////////////////////////////////////////////////

Route::get('/about', function () {
    return view('pages.about.about-us.index');
});

Route::get('/about/news', function () {
    return view('pages.about.news.index');
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
    return Redirect::to('/corporate/executive-team');
});

Route::get('/about/consulting-team', function () {
    return Redirect::to('/corporate/consulting-team');
});

Route::get('/about/scientific-team', function () {
    return Redirect::to('/research/scientific-team');
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

    Route::get('/efficacy/magazine_ja17', function () {
        return view('pages.efficacy.magazine_ja17.index');
    });

    Route::get('/efficacy/podcast', function () {
        return view('pages.efficacy.podcast.index');
    });

    Route::get('/efficacy/magazine_sn17', function () {
        return view('pages.efficacy.magazine_sn17.index');
    });

    Route::get('/efficacy/magazine_jm18', function () {
        return view('pages.efficacy.magazine_jm18.index');
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

Route::get('/contact/map', function () {
    return view('pages.contact.map.index');
});

Route::group(['middleware' => 'authAdmin'], function () {
    Route::get('/admin/nutraceuticals', 'Admin\NutraceuticalsController@index')->name('admin.nutraceuticals');
    Route::get('/admin/nutraceuticals/new', 'Admin\NutraceuticalsController@create')->name('admin.nutraceuticals.create');
    Route::post('/admin/nutraceuticals/new', 'Admin\NutraceuticalsController@store')->name('admin.nutraceuticals.store');
    Route::get('/admin/nutraceuticals/{productSlug}', 'Admin\NutraceuticalsController@edit')->name('admin.nutraceuticals.edit');
    Route::put('/admin/nutraceuticals/{productSlug}', 'Admin\NutraceuticalsController@update')->name('admin.nutraceuticals.update');
    Route::delete('/admin/nutraceuticals/{productSlug}', 'Admin\NutraceuticalsController@destroy')->name('admin.nutraceuticals.destroy');


    Route::get('/admin/patents', 'Admin\PatentsController@index')->name('admin.patents');
    Route::get('/admin/patents/new', 'Admin\PatentsController@create')->name('admin.patents.create');
    Route::post('/admin/patents/new', 'Admin\PatentsController@store')->name('admin.patents.store');
    Route::get('/admin/patents/{patentId}', 'Admin\PatentsController@edit')->name('admin.patents.edit');
    Route::put('/admin/patents/{patentId}', 'Admin\PatentsController@update')->name('admin.patents.update');
    Route::delete('/admin/patents/{patentId}', 'Admin\PatentsController@destroy')->name('admin.patents.destroy');
});
