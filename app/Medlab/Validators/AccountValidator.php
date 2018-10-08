<?php

namespace App\Medlab\Validators;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountValidator
{
    public function validMatchUserPassword($attribute, $value, $parameters)
    {
        $isValid = false;

        $user = Auth::user();
        if ($user != null && hash::check($value, $user->password)) {
            $isValid = true;
        }

        return $isValid;
    }

    public function validMatchUserPasswordError($message, $attribute, $rule, $parameters)
    {
        return 'Incorrect Current Password';
    }
}