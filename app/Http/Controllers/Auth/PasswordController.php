<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Medlab\Mailer\MedlabMailer;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use Illuminate\Http\Request;
use Password;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->redirectTo = '/account';
        $this->subject = 'Medlab - Password Recovery';
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request $request
     * @param MedlabMailer $mail
     * @return \Illuminate\Http\Response
     */
    public function postReset(Request $request, MedlabMailer $mail)
    {
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function ($user, $password) use ($mail) {
            $this->resetPassword($user, $password);
            $mail->sendPasswordResetNoticeToAdmin($user);
        });


        switch ($response) {
            case Password::PASSWORD_RESET:
                return redirect($this->redirectPath())->with('status', trans($response));

            default:
                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
        }
    }
}
