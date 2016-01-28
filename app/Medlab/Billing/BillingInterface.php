<?php

namespace App\Medlab\Billing;


interface BillingInterface
{
    public function getClientToken();
    public function processOrder($request);
    public function orderAlreadyHasMerchTxnRef($request);
    public function createBillingRequest($request);
    public function generateBillingUrl($paymentRequest);
    public function validateSecureHash($receiptSecureHash, $receiptContents);
    public function validateOrderReceipt($request);
}