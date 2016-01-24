<?php

namespace App\Medlab\Mailer;

use Illuminate\Mail\Mailer;
use Mandrill;
use Mandrill_Error;

class MedlabMailer
{

    public $AdminEmailAddress = 'henry_wu@medlab.co';

    /**
     * Laravel Mailer
     *
     * @var Mailer
     */
    protected $mail;

    /**
     * Mandrill API
     *
     * @var Mandrill
     */
    protected $mandrill;

    /**
     * Constructor for the Mailer
     *
     * @param Mailer $mail
     * @param Mandrill $mandrill
     */
    public function __construct(Mailer $mail, Mandrill $mandrill)
    {
        $this->mail = $mail;
        $this->mandrill = $mandrill;
    }

    /**
     * Send Registration Received Email to the newly registered
     *
     * @param $registration
     */
    public function sendRegistrationReceivedEmail($registration)
    {
        try {
            $template_name = 'medlab-registration-received';
            $template_content = array();
            $message = array(
                'subject' => 'Medlab - Your Registration has been received',
                'from_email' => $this->AdminEmailAddress,
                'from_name' => 'Medlab',
                'to' => array(
                    array(
                        'email' => $registration->email,
                        'name' => empty($registration->title) ? $registration->title . " " . $registration->first_name . " " . $registration->last_name : $registration->first_name . " " . $registration->last_name,
                        'type' => 'to'
                    )
                ),
                'headers' => array('Reply-To' => $this->AdminEmailAddress),
                'important' => false,
                'track_opens' => null,
                'track_clicks' => null,
                'auto_text' => null,
                'auto_html' => null,
                'inline_css' => null,
                'url_strip_qs' => null,
                'preserve_recipients' => null,
                'view_content_link' => null,
                'bcc_address' => null,
                'tracking_domain' => null,
                'signing_domain' => null,
                'return_path_domain' => null,
                'merge' => true,
                'merge_language' => 'mailchimp',
                'global_merge_vars' => array(
                    array(
                        'name' => 'GROUP',
                        'content' => (get_class($registration) == "App\\Practitioner_Registration") ? "Practitioner" : "Patient"
                    ),
                    array(
                        'name' => 'TITLE',
                        'content' => $registration->title
                    ),
                    array(
                        'name' => 'FNAME',
                        'content' => $registration->first_name
                    ),
                    array(
                        'name' => 'LNAME',
                        'content' => $registration->last_name
                    ),
                ),
                'merge_vars' => array(
                ),
                'tags' => array('registration_recieved'),
                'subaccount' => null
            );
            $async = false;
            $this->mandrill->messages->sendTemplate($template_name, $template_content, $message, $async);
        } catch(Mandrill_Error $e) {
            // Mandrill errors are thrown as exceptions
            echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
            // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
            throw $e;
        }
    }

    /**
     * Send Notice to Admin Registration Email for new registration
     *
     * @param $registration
     */
    public function sendRegistrationReceivedNoticeToAdmin($registration)
    {
        $from = $this->AdminEmailAddress;
        $to = $this->AdminEmailAddress;

        $this->mail->queue('emails.new_registration_received', compact('registration'), function($message) use ($registration, $from, $to) {

            $message->from($from)
                ->to($to)
                ->subject('Medlab - A New Registration has been received');
        });
    }

    /**
     * Send Registration approved Email to supplicant
     *
     * @param $registration
     */
    public function sendRegistrationApprovalEmail($registration)
    {
        $from = $this->AdminEmailAddress;

        $this->mail->queue('emails.registration_approved', compact('registration'), function($message) use ($registration, $from) {

            $message->from($from)
                ->to($registration->email)
                ->subject('Medlab - Your Registration has been approved');
        });
    }

    /**
     * Send Enquiry Email to Admin Enquiry Email
     *
     * @param $enquiry
     */
    public function sendEnquiryEmail($enquiry)
    {
        $to = $this->AdminEmailAddress;

        $data = array();
        $data['enquiry'] = serialize($enquiry);

        $this->mail->queue('emails.enquiry', $data, function($message) use ($enquiry, $to) {

            $message->from($enquiry['email'])
                ->to($to)
                ->subject('Medlab - Enquiry from ' . $enquiry['name']);
        });
    }

    /**
     * Send Notice to Admin Order Email for newly processed order
     *
     * @param $order
     */
    public function sendOrderReceivedNoticeToAdmin($order)
    {
        $from = $this->AdminEmailAddress;
        $to = $this->AdminEmailAddress;

        $data = array();
        $data['order'] = serialize($order);

        $this->mail->queue('emails.new_order_received', $data, function($message) use ($order, $from, $to) {

            $message->from($from)
                ->to($to)
                ->subject('Medlab - A New Order has been received');
        });
    }
}