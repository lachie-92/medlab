<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestCreatePatientRegistrationRequest;
use App\Http\Requests\GuestCreatePractitionerRegistrationRequest;
use App\Medlab\Repositories\RegistrationRepositoryInterface;
use App\Medlab\Repositories\SearchRepositoryInterface;
use App\Medlab\Traits\DefineAccountParameters;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;
use Mail;

class LoginController extends Controller
{
    use ThrottlesLogins;
    use DefineAccountParameters;

    /**
     * Repository for the Controller
     *
     * @var RegistrationRepositoryInterface
     */
    protected $repository;

    /**
     * Constructor for the LoginController
     *
     * @param RegistrationRepositoryInterface $repository
     */
    public function __construct(RegistrationRepositoryInterface $repository)
    {
        $this->middleware('guest', [
            'except' => [
                'getLogout'
            ]
        ]);

        $this->middleware('auth', [
            'only' => [
                'getLogout'
            ]
        ]);

        $this->repository = $repository;

        parent::__construct();
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
        session()->flush();

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
     * @param GuestCreatePractitionerRegistrationRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegisterPractitioner(GuestCreatePractitionerRegistrationRequest $request)
    {
        $registration = $this->repository->createPractitionerRegistrationForGuest($request);

        Mail::queue('emails.registration_received', compact('registration'), function($message) use ($registration) {

            $message->from('registration_temp_email@medlab.co')
                ->to($registration->email)
                ->subject('Medlab - Your Registration has been received');
        });

        Mail::queue('emails.new_registration_received', compact('registration'), function($message) use ($registration) {

            $message->from('registration_temp_email@medlab.co')
                ->to('13533test@gmail.com')
                ->subject('Medlab - A New Registration has been received');
        });

        return view('pages.account.register.approval.index');
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
     * @param GuestCreatePatientRegistrationRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegisterPatient(GuestCreatePatientRegistrationRequest $request)
    {
        $registration = $this->repository->createPatientRegistrationForGuest($request);

        Mail::queue('emails.registration_received', compact('registration'), function($message) use ($registration) {

            $message->from('registration_temp_email@medlab.co')
                ->to($registration->email)
                ->subject('Medlab - Your Registration has been received');
        });

        Mail::queue('emails.new_registration_received', compact('registration'), function($message) use ($registration) {

            $message->from('registration_temp_email@medlab.co')
                ->to('13533test@gmail.com')
                ->subject('Medlab - A New Registration has been received');
        });

        return view('pages.account.register.approval.index');
    }
}
