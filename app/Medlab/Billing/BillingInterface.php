<?php

namespace App\Medlab\Billing;


interface BillingInterface
{
    public function getClientToken();
    public function processOrder($request);
}