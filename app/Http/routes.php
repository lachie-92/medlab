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

Route::get('research/registration', function () {
    return view('pages.research.research-registration.index');
});

Route::get('research/patents', function () {
    return view('pages.research.patents.index');
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


