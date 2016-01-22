<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => env('MAIL_MANDRILL_KEY'),
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_API_KEY'),
        'secret' => env('STRIPE_API_SECRET'),
    ],

    'braintree' => [
        'environment' => env('BRAINTREE_ENVIRONMENT'),
        'merchantId' => env('BRAINTREE_MERCHANT_ID'),
        'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
        'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
    ],

    'commweb' => [
        'secure-hash-secret' => env('COMMWEB_SECURE_HASH_SECRET'),
        'vpc-url' => env('COMMWEB_VPC_URL'),
        'merchant-id' => env('COMMWEB_MERCHANT_ID'),
        'merchant-access-code' => env('COMMWEB_MERCHANT_ACCESS_CODE')
    ],

    'aws' => [
        'load-balancer' => env('AWS_LOAD_BALANCER')
    ]

];
