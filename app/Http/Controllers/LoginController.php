<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\DefineAccountParameters;
use App\Http\Controllers\Traits\UsefulViewFunctions;
use App\Http\Requests\PatientRegisterRequest;
use App\Http\Requests\PractitionerRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\Patient_Registration;
use App\Practitioner_Registration;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ThrottlesLogins;
    use DefineAccountParameters;
    use UsefulViewFunctions;

    /**
     * Controller constructor - defines the middleware configurations.
     *
     */
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => [
                'getLogin',
                'postLogin',
                'getRegisterPractitioner',
                'postRegisterPractitioner',
                'getRegisterPatient',
                'postRegisterPatient',
                'getRecovery',
                'postRecovery'
            ]
        ]);

        $this->middleware('auth', [
            'only' => [
                'getLogout'
            ]
        ]);
    }

    /**
     * Display the login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('pages.account.login.index');
    }

    /**
     * Process user login request.
     *
     * @param UserLoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(UserLoginRequest $request)
    {
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function getRegister()
    {
        return redirect('/account/login');
    }

    /**
     * Display the register practitioner page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegisterPractitioner()
    {
        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();
        $titleList = $this->createTitleList();
        $businessTypeList = $this->createBusinessTypeList();

        return view('pages.account.register.practitioner.index', compact('auState', 'nzRegion', 'titleList', 'businessTypeList'));
    }

    /**
     * Process the practitioner register.
     *
     * @param PractitionerRegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegisterPractitioner(PractitionerRegisterRequest $request)
    {
        Practitioner_Registration::create([
            'title' => $request->title,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => bcrypt($request->password),
            'clinic_name' => $request->clinic_name,
            'business_type' => $request->business_type,
            'abn' => $request->abn,
            'provider_number' => $request->provider_number,
            'street' => $request->street_address_one,
            'suburb' => $request->street_address_two,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postcode' => $request->postcode,
            'telephone' => $request->telephone,
            'mobile_phone' => $request->mobile_phone
        ]);

        return view('pages.account.register.approval.index');
    }

    /**
     * Display the register patient page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegisterPatient()
    {
        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();
        $titleList = $this->createTitleList();

        return view('pages.account.register.patient.index', compact('auState', 'nzRegion', 'titleList'));
    }

    /**
     * Process the patient register.
     *
     * @param PatientRegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegisterPatient(PatientRegisterRequest $request)
    {
        if ($request->practitioner_not_found) {
            Patient_Registration::create([
                'title' => $request->title,
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => bcrypt($request->password),
                'street' => $request->street_address_one,
                'suburb' => $request->street_address_two,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'postcode' => $request->postcode,
                'telephone' => $request->telephone,
                'mobile_phone' => $request->mobile_phone,
                'practitioner_not_found' => $request->practitioner_not_found,
                'practitioner_not_found_practitioner_name' => $request->practitioner_not_found_practitioner_name,
                'practitioner_not_found_clinic' => $request->practitioner_not_found_clinic,
                'practitioner_not_found_city' => $request->practitioner_not_found_city,
                'practitioner_not_found_state' => $request->practitioner_not_found_state,
                'practitioner_not_found_country' => $request->practitioner_not_found_country,
                'practitioner_not_found_postcode' => $request->practitioner_not_found_postcode,
            ]);
        }
        else {
            Patient_Registration::create([
                'title' => $request->title,
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => bcrypt($request->password),
                'street' => $request->street_address_one,
                'suburb' => $request->street_address_two,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'postcode' => $request->postcode,
                'telephone' => $request->telephone,
                'mobile_phone' => $request->mobile_phone,
                'practitioner_id' => $request->practitioner_id,
                'practitioner_not_found' => $request->practitioner_not_found,
            ]);
        }

        return view('pages.account.register.approval.index');
    }

    public function postGetPractitionerList(Request $request)
    {
        // practitioner_country practitioner_state practitioner_city practitioner_postcode practitioner_clinic





        $practitioner = null;

        return view('pages.account.register.patient.partial.findpractitionerlist', compact('practitioner'));
    }

    /**
     * Display the password recovery page
     *
     * @return \Illuminate\Http\Response
     */
    public function getRecovery()
    {
        return view('pages.account.recovery.index');
    }

    /**
     * Process the password recovery request
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postRecovery(Request $request)
    {
        return view('pages.account.recovery.index');
    }
}
