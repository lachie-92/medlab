<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class PractitionerOnlyController extends Controller
{
    public function __construct() {

        $this->middleware('authPractitioner');
    }

    public function redirect_practitioner_education($product_slug) {

        switch($product_slug) {
            case "nrgbiotic-60s":
                return view('pages.education.practitioner-education.importance-of-uridine.index');
                break;
            case "nrgbiotic-120s":
                return view('pages.education.practitioner-education.importance-of-uridine.index');
                break;
            case "bioticnatal":
                return view('pages.education.practitioner-education.developement-human-microbiota.index');
                break;
            case "enbiotic-60s":
                return view('pages.education.practitioner-education.poor-digestive.index');
                break;
            case "enbiotic-120s":
                return view('pages.education.practitioner-education.poor-digestive.index');
                break;
            case "multibiotic-30s":
                return view('pages.education.practitioner-education.human-microbial-interface.index');
                break;
            case "multibiotic-60s":
                return view('pages.education.practitioner-education.human-microbial-interface.index');
                break;
            case "12mg-optima-relax":
                return view('pages.education.practitioner-education.magnesium-bisglycinate.index');
                break;
            case "bioclean-epa-dha-coq10-60s":
                return view('pages.education.practitioner-education.coenzyme-q10s-uqiquinol.index');
                break;
            case "bioclean-epa-dha-coq10-120s":
                return view('pages.education.practitioner-education.coenzyme-q10s-uqiquinol.index');
                break;
            case "bioclean-epa-dha-plant-sterols-60s":
                return view('pages.education.practitioner-education.omega-3-fatty-acids.index');
                break;
            case "bioclean-epa-dha-plant-sterols-120s":
                return view('pages.education.practitioner-education.omega-3-fatty-acids.index');
                break;
            case "nanocelle-activated-b12":
                return view('pages.education.practitioner-education.why-activated-b12.index');
                break;
            case "biotic-jnr":
                return view('pages.education.practitioner-education.supporting-your-young-one.index');
                break;
            case "w8biotic-lemon-and-lime":
                return view('pages.education.practitioner-education.hica-use-and-understanding.index');
                break;
            case "w8biotic-strawberries-and-cream":
                return view('pages.education.practitioner-education.hica-use-and-understanding.index');
                break;
            case "gastrodaily":
                return view('pages.education.practitioner-education.support-healthy-gastrointestinal-function.index');
                break;
            case "manuka-c":
                return view('pages.education.practitioner-education.ascorbic-acid-and-glutathione.index');
                break;
            case "nanocelle-b12":
                return view('pages.education.practitioner-education.role-of-b12.index');
                break;
            case "nanocelle-d3":
                return view('pages.education.practitioner-education.is-vitamin-d3-essential.index');
                break;
            case "orsbiotic":
                return view('pages.education.practitioner-education.new-concept-of-oral-rehydration.index');
                break;
            case "SB-5B":
                return view('pages.education.practitioner-education.efficacy-of-saccharomyces-boulardii.index');
                break;
            case "NOS":
                return view('pages.education.practitioner-education.nitric-oxide-for-sport-performance.index');
                break;
            case "nanocelle-d3-k2":
                return view('pages.education.practitioner-education.mechanisms-of-d3-and-k2.index');
                break;
            default:
                return view('errors.404');
        }
    }
}
