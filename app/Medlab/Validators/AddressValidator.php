<?php

namespace App\Medlab\Validators;


use App\Medlab\Traits\UsefulViewFunctions;

class AddressValidator
{
    use UsefulViewFunctions;


    public function validCountry($attribute, $value, $parameters)
    {
        $country = $this->createCountryList();

        $isValid = false;

        if (array_key_exists($value, $country)) {
            $isValid = true;
        }

        return $isValid;
    }

    public function validCountryError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid Country';
    }

    public function validState($attribute, $value, $parameters)
    {
        $auState = $this->createAuStateList();
        $nzRegion = $this->createNzRegionList();

        $isValid = false;

        if (array_key_exists($value, $auState)) {
            $isValid = true;
        }

        if (array_key_exists($value, $nzRegion)) {
            $isValid = true;
        }

        return $isValid;
    }

    public function validStateError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid State';
    }

    public function validDeliveryOption($attribute, $value, $parameters)
    {
        $deliveryOptionList = [
            'Signature Required',
            'Authority to leave unattended',
        ];

        $isValid = false;

        if (in_array($value, $deliveryOptionList)) {
            $isValid = true;
        }

        return $isValid;
    }

    public function validDeliveryOptionError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid Delivery Instruction';
    }
}