<?php

namespace App\Medlab\Billing;

use App\Order;
use Illuminate\Support\Facades\Config;

class CommWebBilling implements BillingInterface
{
    protected $vpc_version = 1;
    protected $vpc_Locale = 'en';
    protected $vpc_gateway = 'ssl';
    protected $vpc_Merchant;
    protected $vpc_AccessCode;
    protected $vpc_ReturnURL;
    protected $AgainLink;
    protected $secure_hash_secret;
    protected $vpc_url;

    public function __construct()
    {
        $this->secure_hash_secret = Config::get('services.commweb.secure-hash-secret');
        $this->vpc_url = Config::get('services.commweb.vpc-url') . "?";
        $this->vpc_Merchant = Config::get('services.commweb.merchant-id');
        $this->vpc_AccessCode = Config::get('services.commweb.merchant-access-code');
        $this->vpc_ReturnURL = url('/shoppingcart/digitalreceipt');
        $this->AgainLink = url('/shoppingcart/summary');
    }

    public function processOrder($request)
    {
        $order = Order::findOrFail($request['order']);
        $user = $order->user;

        $paymentRequest = [
            'vpc_version' => $this->vpc_version,
            'vpc_Command' => 'pay',
            'vpc_Amount' => $order->grand_total,
            'vpc_MerchTxnRef' => 'Not sure what this is',
            'vpc_OrderInfo' => 'Paying for order: ' . $order->id,
            'vpc_Locale' => $this->vpc_Locale,
            'vpc_gateway' => $this->vpc_gateway,
            'vpc_card' => 'Visa',
            'vpc_Merchant' => $this->vpc_Merchant,
            'vpc_AccessCode' => $this->vpc_AccessCode,
            'vpc_ReturnURL' => $this->vpc_ReturnURL,
            'AgainLink' => $this->AgainLink,
        ];

        $this->createBillingRequest($paymentRequest);

        return $this->vpc_url;
    }

    public function getClientToken()
    {
        return 'NA';
    }

    protected function createBillingRequest($paymentRequest)
    {
        $md5HashData = $this->secure_hash_secret;
        ksort($paymentRequest);

        $appendAmp = 0;
        foreach($paymentRequest as $key => $value) {

            // create the md5 input and URL leaving out any fields that have no value
            if (strlen($value) > 0) {

                // this ensures the first parameter of the URL is preceded by the '?' char
                if ($appendAmp == 0) {
                    $this->vpc_url .= urlencode($key) . '=' . urlencode($value);
                    $appendAmp = 1;
                } else {
                    $this->vpc_url .= '&' . urlencode($key) . "=" . urlencode($value);
                }

                $md5HashData .= $value;
            }
        }

        if (strlen($this->secure_hash_secret) > 0) {
            $this->vpc_url .= "&vpc_SecureHash=" . strtoupper(md5($md5HashData));
        }
    }
}