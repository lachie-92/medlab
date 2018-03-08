<?php

namespace App\Medlab\Billing;

use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;

class StripeBilling implements BillingInterface
{
    public $clientToken;
    public $errors;

    public function __construct()
    {
        $this->clientToken =Config::get('services.stripe.key');
    }

    public function processOrder($request)
    {
        $order = Order::find($request['order']);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = \Stripe\Charge::create([
                "amount"      => $order->grand_total * 100,
                "currency"    => "aud",
                "description" => "Example charge",
                "source"      => $request['stripeToken'],
                "metadata"    => [
                    "order_id" => $order->id,
                ],
            ]);
        } catch (\Stripe\Error\Base $e) {
            $this->errors = collect($e->getMessage());
            return false;
        }

        if ($charge->captured) {
            $order->order_status       = 'Order Received';
            $order->payment_type       = $charge->source->type;
            $order->purchase_date      = Carbon::now();
            $order->transaction_id     = $charge->id;
            $order->transaction_status = 'Complete';
            $order->receipt_no         = $charge->receipt_number;
            $order->authorize_id       = $charge->id;
            $order->save();

            return true;
        } else {
        }
    }

    public function getClientToken()
    {
    }

    public function orderAlreadyHasMerchTxnRef($request)
    {
    }

    public function createBillingRequest($request)
    {
    }

    public function generateBillingUrl($paymentRequest)
    {
    }

    public function validateSecureHash($receiptSecureHash, $receiptContents)
    {
    }

    public function validateOrderReceipt($request)
    {
    }
}
