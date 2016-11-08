<?php

namespace App\Medlab\Mailer;

use Illuminate\Mail\Mailer;
use Mandrill;
use Mandrill_Error;
use View;

class MedlabMailer
{

    /**
     * Website Admin Email Address
     *
     * @var Mailer
     */
    public $adminEmailAddress;

    /**
     * Email Address for notifying New Orders
     *
     * @var Mailer
     */
    public $orderEmailAddress;

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
        $this->adminEmailAddress = env('MAIL_ADMIN_ADDRESS', 'hello@medlab.co');
        $this->orderEmailAddress = env('MAIL_ORDER_ADDRESS', 'sales@medlab.co');
    }

    public function sendPasswordResetNoticeToAdmin($user)
    {
        $from = $this->adminEmailAddress;
        $to = $this->adminEmailAddress;

        $this->mail->queue('emails.password_reset_received', compact('user'), function($message) use ($from, $to) {

            $message->from($from)
                ->to($to)
                ->subject('Medlab - Account password reset received');
        });
    }

    /**
     * Send Registration Received Email to the newly registered
     *
     * @param $registration
     * @throws Mandrill_Error
     */
    public function sendRegistrationReceivedEmail($registration)
    {
        try {
            $template_name = 'medlab-registration-received';
            $template_content = array();
            $message = array(
                'subject' => 'Medlab - Your Registration has been received',
                'from_email' => $this->adminEmailAddress,
                'from_name' => 'Medlab',
                'to' => array(
                    array(
                        'email' => $registration->email,
                        'name' => empty($registration->title) ? $registration->title . " " . $registration->first_name . " " . $registration->last_name : $registration->first_name . " " . $registration->last_name,
                        'type' => 'to'
                    )
                ),
                'headers' => array('Reply-To' => $this->adminEmailAddress),
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
        $from = $this->adminEmailAddress;
        $to = $this->adminEmailAddress;

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
        $from = $this->adminEmailAddress;

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
        $to = $this->adminEmailAddress;

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
        $from = $this->adminEmailAddress;
        $to = $this->orderEmailAddress;

        $data = array();
        $data['order'] = serialize($order);

        $this->mail->queue('emails.new_order_received', $data, function($message) use ($order, $from, $to) {

            $message->from($from)
                ->to($to)
                ->subject('Medlab - A New Order has been received');
        });
    }

    public function sendOrderReceivedNoticeToClient($order)
    {
        $customer = $order->user->customer;
        $table = View::make('emails.order_table',  compact('order'));

        try {
            $template_name = 'medlab-order-receipt';
            $template_content = array();
            $message = array(
                'subject' => 'Medlab - Order Received #' . $order->id,
                'from_email' => $this->adminEmailAddress,
                'from_name' => 'Medlab',
                'to' => array(
                    array(
                        'email' => $customer->user->email,
                        'name' => empty($customer->title) ? $customer->title . " " . $customer->first_name . " " . $customer->last_name : $customer->first_name . " " . $customer->last_name,
                        'type' => 'to'
                    )
                ),
                'headers' => array('Reply-To' => $this->adminEmailAddress),
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
                        'name' => 'TITLE',
                        'content' => $customer->title
                    ),
                    array(
                        'name' => 'FNAME',
                        'content' => $customer->first_name
                    ),
                    array(
                        'name' => 'LNAME',
                        'content' => $customer->last_name
                    ),
                    array(
                        'name' => 'TABLE',
                        'content' => strval($table)
                    ),
                    array(
                        'name' => 'ORDER_NUMBER',
                        'content' => $order->id
                    ),
                    array(
                        'name' => 'ORDER_DATE',
                        'content' => strval($order->purchase_date)
                    ),
                    array(
                        'name' => 'ORDER_STATUS',
                        'content' => $order->order_status
                    ),
                    array(
                        'name' => 'ORDER_PAYMENT',
                        'content' => $order->grand_total
                    ),
                    array(
                        'name' => 'SHIP_TITLE',
                        'content' => $order->shipping_address_title
                    ),
                    array(
                        'name' => 'SHIP_FNAME',
                        'content' => $order->shipping_address_first_name
                    ),
                    array(
                        'name' => 'SHIP_LNAME',
                        'content' => $order->shipping_address_last_name
                    ),
                    array(
                        'name' => 'SHIP_STREET',
                        'content' => $order->shipping_address_street
                    ),
                    array(
                        'name' => 'SHIP_SUBURB',
                        'content' => $order->shipping_address_suburb
                    ),
                    array(
                        'name' => 'SHIP_STATE',
                        'content' => $order->shipping_address_state
                    ),
                    array(
                        'name' => 'SHIP_POST',
                        'content' => $order->shipping_address_postcode
                    ),
                    array(
                        'name' => 'SHIP_COUNTRY',
                        'content' => $order->shipping_address_country
                    ),
                    array(
                        'name' => 'PHONE',
                        'content' => $order->shipping_address_phone
                    ),
                    array(
                        'name' => 'DELIVERY_INSTRUCTION',
                        'content' => $order->delivery_instruction
                    ),
                    array(
                        'name' => 'BILL_TITLE',
                        'content' => $order->billing_address_title
                    ),
                    array(
                        'name' => 'BILL_FNAME',
                        'content' => $order->billing_address_first_name
                    ),
                    array(
                        'name' => 'BILL_LNAME',
                        'content' => $order->billing_address_last_name
                    ),
                    array(
                        'name' => 'BILL_STREET',
                        'content' => $order->billing_address_street
                    ),
                    array(
                        'name' => 'BILL_SUBURB',
                        'content' => $order->billing_address_suburb
                    ),
                    array(
                        'name' => 'BILL_STATE',
                        'content' => $order->billing_address_state
                    ),
                    array(
                        'name' => 'BILL_POST',
                        'content' => $order->billing_address_postcode
                    ),
                    array(
                        'name' => 'BILL_COUNTRY',
                        'content' => $order->billing_address_country
                    ),
                ),
                'merge_vars' => array(
                ),
                'tags' => array('registration_approved'),
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

    public function sendCommWebReceiptErrorToAdmin($errorMessages)
    {
        $from = $this->adminEmailAddress;
        $to = $this->adminEmailAddress;

        $data = array();
        $data['errorMessages'] = serialize($errorMessages);

        $this->mail->queue('emails.commweb_receipt_error', $data, function($message) use ($from, $to) {

            $message->from($from)
                ->to($to)
                ->subject('Medlab - Received a CommWeb Receipt with Error');
        });
    }
}