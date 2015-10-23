<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSendEnquiryEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|email|max:255',
            'phone' => array('required','regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'),
            'enquiry' => 'required|max:200'
        ]);

        $enquiry = $request->only([
            'name',
            'email',
            'phone',
            'enquiry'
        ]);

        $data = array();
        $data['enquiry'] = serialize($enquiry);

        Mail::queue('emails.enquiry', $data, function($message) use ($enquiry) {

            $message->from($enquiry['email'])
                ->to('13533test@gmail.com')
                ->subject('Medlab - Enquiry from ' . $enquiry['name']);
        });

        return redirect('/contact')->with(['message' => 'Your Enquiry has been Sent']);
    }
}
