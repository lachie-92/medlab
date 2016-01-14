<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestCreatePatientRegistrationRequest;
use App\Http\Requests\GuestCreatePractitionerRegistrationRequest;
use App\Medlab\Mailer\MedlabMailer;
use App\Medlab\Repositories\RegistrationRepositoryInterface;
use App\Medlab\Traits\DefineAccountParameters;
use App\Http\Requests\UserLoginRequest;
use App\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;

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

        $hasValidUserGroup = count(
            User::where('email', '=', $credentials['email'])->
                where(function($query) {
                    $query->where('group', '=', 'Practitioner') ->
                        orWhere('group', '=', 'Patient') ->
                        orWhere('group', '=', 'Admin');
                })->get());

        if ($hasValidUserGroup) {

            if (Auth::attempt($credentials, $request->has('remember'))) {
                return $this->handleUserWasAuthenticated($request, $throttles);
            }
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
     * @param MedlabMailer $mail
     * @return \Illuminate\Http\Response
     */
    public function postRegisterPractitioner(GuestCreatePractitionerRegistrationRequest $request, MedlabMailer $mail)
    {
        $registration = $this->repository->createPractitionerRegistrationForGuest($request);
        $mail->sendRegistrationReceivedEmail($registration);
        $mail->sendRegistrationReceivedNoticeToAdmin($registration);

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
     * @param MedlabMailer $mail
     * @return \Illuminate\Http\Response
     */
    public function postRegisterPatient(GuestCreatePatientRegistrationRequest $request, MedlabMailer $mail)
    {
        $registration = $this->repository->createPatientRegistrationForGuest($request);
        $mail->sendRegistrationReceivedEmail($registration);
        $mail->sendRegistrationReceivedNoticeToAdmin($registration);

        return view('pages.account.register.approval.index');
    }
}
