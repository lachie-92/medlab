<?php

namespace App\Medlab\Billing;


use Illuminate\Support\Facades\Config;

class StripeBilling implements BillingInterface
{
    public $clientToken;

    public function __construct()
    {
        $this->clientToken =Config::get('services.stripe.key');
    }

    public function processOrder($request)
    {

    }

    public function getClientToken()
    {

    }
}