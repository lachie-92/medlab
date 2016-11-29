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
            case "12mg-optima-relax-150g":
                return view('pages.education.practitioner-education.magnesium-bisglycinate.index');
                break;
            case "12mg-optima-relax-300g":
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
            case "manuka-c-105g":
                return view('pages.education.practitioner-education.ascorbic-acid-and-glutathione.index');
                break;
            case "manuka-c-210g":
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
            case "immune-5-vanilla":
                return view('pages.education.practitioner-education.immune-modulating-properties.index');
                break;
            case "immune-5-raspberry":
                return view('pages.education.practitioner-education.immune-modulating-properties.index');
                break;
            default:
                return view('errors.404');
        }
    }

    public function redirect_cmi($product_slug, $language) {

        switch($product_slug) {
            case "nrgbiotic-60s":
                $file_path = "/img/products/ngrbiotic_60s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "nrgbiotic-120s":
                $file_path = "/img/products/ngrbiotic_60s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "bioticnatal":
                $file_path = "/img/products/bioticnatal/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "enbiotic-60s":
                $file_path = "/img/products/enbiotic_60s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "enbiotic-120s":
                $file_path = "/img/products/enbiotic_60s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "multibiotic-30s":
                $file_path = "/img/products/multibiotic_60s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "multibiotic-60s":
                $file_path = "/img/products/multibiotic_60s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "12mg-optima-relax-150g":
                $file_path = "/img/products/12mg_optima/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "12mg-optima-relax-300g":
                $file_path = "/img/products/12mg_optima/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "bioclean-epa-dha-coq10-60s":
                $file_path = "/img/products/bioclean_epa_dha_coq10_60s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "bioclean-epa-dha-coq10-120s":
                $file_path = "/img/products/bioclean_epa_dha_coq10_120s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "bioclean-epa-dha-plant-sterols-60s":
                $file_path = "/img/products/bioclean_epa_dha_plant_sterols_60s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "bioclean-epa-dha-plant-sterols-120s":
                $file_path = "/img/products/bioclean_epa_dha_plant_sterols_120s/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "nanocelle-activated-b12":
                $file_path = "/img/products/nanocelle_activated_b12/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "biotic-jnr":
                $file_path = "/img/products/biotic_jnr/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "w8biotic-lemon-and-lime":
                $file_path = "/img/products/w8biotic/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "w8biotic-strawberries-and-cream":
                $file_path = "/img/products/w8biotic_sc/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "gastrodaily":
                $file_path = "/img/products/gastrodaily/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "manuka-c-105g":
                $file_path = "/img/products/manuka-c-105g/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "manuka-c-210g":
                $file_path = "/img/products/manuka-c-105g/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "nanocelle-b12":
                $file_path = "/img/products/nanocelle_b12/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "nanocelle-d3":
                $file_path = "/img/products/nanocelle_d3/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "orsbiotic":
                $file_path = "/img/products/orsbiotic/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "SB-5B":
                $file_path = "/img/products/sb_5b/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "nanocelle-d3-k2":
                $file_path = "/img/products/nanocelle_d3k2/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "immune-5-vanilla":
                $file_path = "/img/products/immune-5/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            case "immune-5-raspberry":
                $file_path = "/img/products/immune-5_raspberry/cmi/" . $language . ".pdf";
                return view('pages.nutraceuticals.cmi.index', compact('file_path'));
                break;
            default:
                return view('errors.404');
        }
    }
}
