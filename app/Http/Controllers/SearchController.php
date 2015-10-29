<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationCompanySearchRequest;
use App\Http\Requests\RegistrationPractitionerSearchRequest;
use App\Medlab\Repositories\SearchRepositoryInterface;
use App\Http\Requests;

class SearchController extends Controller
{
    /**
     * Search Repository for the Controller
     *
     * @var SearchRepositoryInterface
     */
    protected $searchRepository;

    public function __construct(SearchRepositoryInterface $searchRepository)
    {
        $this->middleware('authAdmin', [
            'only' => [
                'postGetCompanyList'
            ]
        ]);

        $this->searchRepository = $searchRepository;

        parent::__construct();
    }

    /**
     * Return a html list of companies based on the search criteria
     *
     * @param RegistrationCompanySearchRequest $request
     * @return \Illuminate\Http\Response
     */
    public function postGetCompanyList(RegistrationCompanySearchRequest $request)
    {
        $filtered_companies = $this->searchRepository->searchCompany($request);

        return view('pages.account.search.findcompanylist', compact('filtered_companies'));
    }

    /**
     * Return a html list of practitioners based on the search criteria
     *
     * @param RegistrationPractitionerSearchRequest $request
     * @return \Illuminate\Http\Response
     */
    public function postGetPractitionerList(RegistrationPractitionerSearchRequest $request)
    {
        $filtered_practitioners = $this->searchRepository->searchPractitioner($request);

        return view('pages.account.search.findpractitionerlist', compact('filtered_practitioners'));
    }
}
