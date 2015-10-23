<?php


namespace App\Medlab\Validators;


class ShoppingCartValidator
{
    public function validPaymentOption($attribute, $value, $parameters)
    {
        $paymentOption = ['CreditCard', 'PayPalAccount'];

        return in_array($value, $paymentOption);
    }

    public function validPaymentOptionError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid Payment Option';
    }
}