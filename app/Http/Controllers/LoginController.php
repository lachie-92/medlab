<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\DefineAccountParameters;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ThrottlesLogins;
    use DefineAccountParameters;

    /**
     * Controller constructor - defines the middleware configurations.
     *
     */
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => [
                'getLogin',
                'postLogin'
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

    /**
     * Display the register practitioner page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegisterPractitioner()
    {
        return view('pages.account.register.practitioner.index');
    }

    /**
     * Process the practitioner register.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegisterPractitioner(Request $request)
    {
        return view('pages.account.register.practitioner.index');
    }

    /**
     * Display the register patient page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegisterPatient()
    {
        return view('pages.account.register.patient.index');
    }

    /**
     * Process the patient register.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegisterPatient(Request $request)
    {
        return view('pages.account.register.patient.index');
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
