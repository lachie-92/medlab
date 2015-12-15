<?php

namespace App\Medlab\Billing;


use App\Order;
use Braintree_ClientToken;
use Braintree_Configuration;
use Braintree_Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;

class BraintreeBilling implements BillingInterface
{
    public function __construct()
    {
        Braintree_Configuration::environment(Config::get('services.braintree.environment'));
        Braintree_Configuration::merchantId(Config::get('services.braintree.merchantId'));
        Braintree_Configuration::publicKey(Config::get('services.braintree.publicKey'));
        Braintree_Configuration::privateKey(Config::get('services.braintree.privateKey'));
    }

    public function getClientToken()
    {
        return Braintree_ClientToken::generate();
    }

    public function processOrder($request)
    {
        $order = Order::findOrFail($request['order']);
        $user = $order->user;

        $result = Braintree_Transaction::sale([
            'amount' => $order->grand_total,
            'orderId' => $order->id,
            'paymentMethodNonce' => $request['payment_token'],
            'customer' => [
                'firstName' => $user->customer->first_name,
                'lastName' => $user->customer->last_name,
                'email' => $user->email,
            ],
            'billing' => [
                'firstName' => $order->billing_address_first_name,
                'lastName' => $order->billing_address_last_name,
                'streetAddress' => $order->billing_address_street,
                'extendedAddress' => $order->billing_address_suburb,
                'locality' => $order->billing_address_city,
                'region' => $order->billing_address_state,
                'postalCode' => $order->billing_address_postcode,
                'countryName' => $order->billing_address_country
            ],
            'shipping' => [
                'firstName' => $order->shipping_address_first_name,
                'lastName' => $order->shipping_address_last_name,
                'streetAddress' => $order->shipping_address_street,
                'extendedAddress' => $order->shipping_address_suburb,
                'locality' => $order->shipping_address_city,
                'region' => $order->shipping_address_state,
                'postalCode' => $order->shipping_address_postcode,
                'countryName' => $order->shipping_address_country
            ],
            /*'descriptor' => [
                'name' => 'Medlab',
                'phone' => '1300 369 570 ',
                'url' => 'medlab.co'
            ]*/
        ]);

        if ($result->success) {

            $order->order_status = 'Order Received';
            $order->payment_type = $request['payment_type'];
            $order->purchase_date = Carbon::now();
            //$order->purchase_date = $result->transaction->createdAt; need to change the time zone on braintree to Austraila
            $order->transaction_id = $result->transaction->id;
            $order->transaction_ip = $request['ip'];
            $order->save();
        }

        return $result;
    }
}