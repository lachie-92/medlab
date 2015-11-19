<?php

namespace App\Medlab\Mailer;

use Illuminate\Mail\Mailer;

class MedlabMailer
{
    /**
     * Admin Registration Email Address
     *
     * @var string
     */
    public $AdminRegistrationEmailAddress = 'registration_temp_email@medlab.co';

    /**
     * Admin Enquiry Email Address
     *
     * @var string
     */
    public $AdminEnquiryEmailAddress = '13533test@gmail.com';

    /**
     * Admin Notice Email Address
     *
     * @var string
     */
    public $AdminNoticeEmailAddress = '13533test@gmail.com';

    /**
     * Admin Order Email Address
     *
     * @var string
     */
    public $AdminOrderEmailAddress = '13533test@gmail.com';

    /**
     * Laravel Mailer
     *
     * @var Mailer
     */
    protected $mail;

    /**
     * Constructor for the Mailer
     *
     * @param Mailer $mail
     */
    public function __construct(Mailer $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Send Registration Received Email to the newly registered
     *
     * @param $registration
     */
    public function sendRegistrationReceivedEmail($registration)
    {
        $from = $this->AdminRegistrationEmailAddress;

        $this->mail->queue('emails.registration_received', compact('registration'), function($message) use ($registration, $from) {

            $message->from($from)
                ->to($registration->email)
                ->subject('Medlab - Your Registration has been received');
        });
    }

    /**
     * Send Notice to Admin Registration Email for new registration
     *
     * @param $registration
     */
    public function sendRegistrationReceivedNoticeToAdmin($registration)
    {
        $from = $this->AdminRegistrationEmailAddress;
        $to = $this->AdminNoticeEmailAddress;

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
        $from = $this->AdminRegistrationEmailAddress;

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
        $to = $this->AdminEnquiryEmailAddress;

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
        $from = $this->AdminOrderEmailAddress;
        $to = $this->AdminNoticeEmailAddress;

        $data = array();
        $data['order'] = serialize($order);

        $this->mail->queue('emails.new_order_received', $data, function($message) use ($order, $from, $to) {

            $message->from($from)
                ->to($to)
                ->subject('Medlab - A New Order has been received');
        });
    }
}