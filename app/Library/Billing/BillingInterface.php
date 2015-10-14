<?php

namespace App\Library\Billing;


interface BillingInterface
{
    public function getClientToken();
    public function processOrder($request);
}