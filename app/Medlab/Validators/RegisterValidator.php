<?php

namespace App\Medlab\Validators;


class RegisterValidator
{
    public function validTitle($attribute, $value, $parameters)
    {
        $titles = ['Mr', 'Ms', 'Miss', 'Dr.', 'Prof.'];

        return in_array($value, $titles);
    }

    public function validTitleError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid Title';
    }

    public function validBusinessType($attribute, $value, $parameters)
    {
        $type = ['company', 'partnership', 'sole_enterprise_or_trade'];

        return in_array($value, $type);
    }

    public function validBusinessTypeError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid Business Type';
    }

    public function validABN($attribute, $value, $parameters)
    {
        return $this->validateABN($value);
    }

    public function validABNError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid ABN';
    }

    private function validateABN($abn)
    {
        $weights = array(10, 1, 3, 5, 7, 9, 11, 13, 15, 17, 19);

        // strip anything other than digits
        $abn = preg_replace("/[^\d]/","",$abn);

        // check length is 11 digits
        if (strlen($abn)==11) {
            // apply ato check method
            $sum = 0;
            foreach ($weights as $position=>$weight) {
                $digit = $abn[$position] - ($position ? 0 : 1);
                $sum += $weight * $digit;
            }
            return ($sum % 89)==0;
        }
        return false;
    }
}