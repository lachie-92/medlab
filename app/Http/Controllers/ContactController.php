<?php

namespace App\Http\Controllers;

use App\Medlab\Mailer\MedlabMailer;
use Illuminate\Http\Request;
use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Display the Contact Us Page
     *
     * @return \Illuminate\Http\Response
     */
    public function getShowContactInformation()
    {
        return view('pages.contact.index');
    }

    /**
     * Send Enquiry Email to Medlab
     *
     * @param Request $request
     * @param MedlabMailer $mail
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSendEnquiryEmail(Request $request, MedlabMailer $mail)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|email|max:255',
            'phone' => array('required','regex:/^[0-9 ]+$/', 'max:20'),
            'enquiry' => 'required|max:200'
        ]);

        $enquiry = $request->only([
            'name',
            'email',
            'phone',
            'enquiry'
        ]);

        $mail->sendEnquiryEmail($enquiry);

        return redirect('/contact')->with(['message' => 'Your Enquiry has been Sent']);
    }
}
