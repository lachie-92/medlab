<?php
namespace App\Medlab\Repositories;


use App\Company;
use App\Practitioner;

class SearchRepository implements SearchRepositoryInterface
{
    //
    // Search Company and Practitioner
    //
    /**
     * Create a Company List with the given criteria
     *
     * @param $request
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function searchCompany($request)
    {
        $all_companies = Company::orderBy('id');

        if(!empty($request['company_country'])) {
            $all_companies = $all_companies->filterCountry($request['company_country']);
        }

        if(!empty($request['company_state'])) {
            $all_companies = $all_companies->filterState($request['company_state']);
        }

        if(!empty($request['company_suburb'])) {
            $all_companies = $all_companies->filterSuburb($request['company_suburb']);
        }

        if(!empty($request['company_postcode'])) {
            $all_companies = $all_companies->filterPostcode($request['company_postcode']);
        }

        if(!empty($request['company_name'])) {
            $all_companies = $all_companies->filterName($request['company_name']);
        }

        if(!empty($request['company_type'])) {
            $all_companies = $all_companies->filterType($request['company_type']);
        }

        if(!empty($request['company_business_number'])) {
            $all_companies = $all_companies->filterBusinessNumber($request['company_business_number']);
        }

        $filtered_companies = $all_companies->get();

        return $filtered_companies;
    }

    /**
     * Create a Practitioner List with the given criteria
     *
     * @param $request
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function searchPractitioner($request)
    {
        $all_practitioners = Practitioner::orderBy('id');

        if(!empty($request['practitioner_country'])) {
            $all_practitioners = $all_practitioners->filterCountry($request['practitioner_country']);
        }

        if(!empty($request['practitioner_state'])) {
            $all_practitioners = $all_practitioners->filterState($request['practitioner_state']);
        }

        if(!empty($request['practitioner_suburb'])) {
            $all_practitioners = $all_practitioners->filterSuburb($request['practitioner_suburb']);
        }

        if(!empty($request['practitioner_postcode'])) {
            $all_practitioners = $all_practitioners->filterPostcode($request['practitioner_postcode']);
        }

        if(!empty($request['practitioner_clinic'])) {
            $all_practitioners = $all_practitioners->filterClinic($request['practitioner_clinic']);
        }

        $filtered_practitioners = $all_practitioners->get();

        return $filtered_practitioners;
    }
}