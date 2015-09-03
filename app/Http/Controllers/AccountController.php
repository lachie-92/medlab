<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\UsefulViewFunctions;
use App\Http\Requests\AddressUpdateRequest;
use App\Http\Requests\EmailUpdateRequest;
use App\Http\Requests\NewsletterUpdateRequest;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    use UsefulViewFunctions;

    /**
     * Controller constructor - defines the middleware configurations.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => [
                'dashboard',
                'getEdit',
                'postEdit',
                'getLogout'
            ]
        ]);
    }

    /**
     * Display the Dashboard page
     *
     * @param Guard $auth
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Guard $auth)
    {
        $user = $auth->user();

        $mainPhone = $user->customer->customer_numbers->where('type', 'Main Number')->first();
        $mainMobile = $user->customer->customer_numbers->where('type', 'Main Mobile Number')->first();
        $mainAddress = $user->customer->customer_addresses->where('type', 'Main Address')->first();

        switch ($user->group) {

            case 'Patient':

                $practitioner = $user->patient->practitioner;
                $companyMainAddress = $practitioner->company->company_addresses->where('type', 'Main Address')->first();
                $companyMainPhone = $practitioner->company->company_numbers->where('type', 'Main Number')->first();

                return view('pages.account.dashboard.patient.main.index', compact(
                    'user', 'mainPhone', 'mainMobile',
                    'mainAddress', 'practitioner', 'companyMainAddress',
                    'companyMainPhone'
                ));
                break;

            case 'Practitioner':

                $company = $user->practitioner->company;
                $companyMainAddress = $company->company_addresses->where('type', 'Main Address')->first();
                $companyMainPhone = $company->company_numbers->where('type', 'Main Number')->first();

                return view('pages.account.dashboard.practitioner.main.index', compact(
                    'user', 'mainPhone', 'mainMobile',
                    'mainAddress', 'company', 'companyMainAddress',
                    'companyMainPhone'
                ));
                break;
        }
    }

    /**
     * Display the edit user account information page
     *
     * @param Request $request
     *
     * @param Guard $auth
     *
     * @return \Illuminate\Http\Response
     */
    public function getEdit(Request $request, Guard $auth)
    {
        $user = $auth->user();

        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();

        $mainPhone = $user->customer->customer_numbers->where('type', 'Main Number')->first();
        $mainMobile = $user->customer->customer_numbers->where('type', 'Main Mobile Number')->first();
        $mainAddress = $user->customer->customer_addresses->where('type', 'Main Address')->first();

        switch ($user->group) {

            case 'Patient':

                $practitioner = $user->patient->practitioner;
                $companyMainAddress = $practitioner->company->company_addresses->where('type', 'Main Address')->first();
                $companyMainPhone = $practitioner->company->company_numbers->where('type', 'Main Number')->first();

                return view('pages.account.dashboard.patient.edit.index', compact(
                    'user', 'mainPhone', 'mainMobile',
                    'mainAddress', 'practitioner', 'companyMainAddress',
                    'auState', 'nzRegion', 'companyMainPhone'
                ));
                break;

            case 'Practitioner':

                $company = $user->practitioner->company;
                $companyMainAddress = $company->company_addresses->where('type', 'Main Address')->first();
                $companyMainPhone = $company->company_numbers->where('type', 'Main Number')->first();

                return view('pages.account.dashboard.practitioner.edit.index', compact(
                    'user', 'mainPhone', 'mainMobile',
                    'mainAddress', 'company', 'companyMainAddress',
                    'auState', 'nzRegion', 'companyMainPhone'
                ));
                break;
        }
    }

    /**
     * Edit the user email
     *
     * @param EmailUpdateRequest $request
     * @param Guard $auth
     *
     * @return \Illuminate\Http\Response
     */
    public function postEmail(EmailUpdateRequest $request, Guard $auth)
    {
        $user = $auth->user();

        $user->email = $request->email;
        $user->save();

        $mainEmail = $user->customer->customer_emails->where('type', 'Main Email')->first();
        $mainEmail->email_address = $request->email;
        $mainEmail->save();

        return redirect('/account/edit')->with(['message' => 'Email has been updated']);
    }

    public function postNewsletter(NewsletterUpdateRequest $request, Guard $auth)
    {
        $user = $auth->user();

        $user->newsletter_subscription = $request->newsletter;
        $user->save();

        return redirect('/account/edit')->with(['message' => 'Newsletter has been updated']);
    }

    public function postAddress(AddressUpdateRequest $request, Guard $auth)
    {
        $user = $auth->user();

        $mainAddress = $user->customer->customer_addresses->where('type', "Main Address")->first();
        $mainAddress->postcode = $request->postcode;
        $mainAddress->state = $request->state;
        $mainAddress->suburb = $request->street_address_two;
        $mainAddress->street = $request->street_address_one;
        $mainAddress->address = $request->street_address_one . ' ' . $request->street_address_two;
        $mainAddress->city = $request->city;
        $mainAddress->country = $request->country;
        $mainAddress->save();

        $mainPhone = $user->customer->customer_numbers->where('type', 'Main Number')->first();
        $mainPhone->number = $request->telephone;
        $mainPhone->save();

        $mainMobile = $user->customer->customer_numbers->where('type', 'Main Mobile Number')->first();
        $mainMobile->number = $request->mobile_phone;
        $mainMobile->save();

        return redirect('/account/edit')->with(['message' => 'Address has been updated']);
    }
}
