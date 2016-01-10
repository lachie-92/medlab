<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class GuestCreatePractitionerRegistrationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|validTitle|max:10',
            'email' => 'required|email|max:255|unique:users',
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'password' => 'required|confirmed|min:6',
            'clinic_name' => 'required:max:50',
            'business_type' => 'required|validBusinessType',
            'business_number' => 'required|numeric',
            'provider_number' => 'required|numeric',
            'street_address_one' => 'required|max:50',
            'street_address_two' => 'required|max:50',
            'state' => 'required|validState|max:30',
            'country' => 'required|validCountry',
            'postcode' => 'required|digits:4',
            'telephone' => array('required','numeric'),
            'mobile_phone' => array('required','numeric'),
            'agree' => 'boolean|accepted'
        ];
    }

    public function messages()
    {
        return [
            'agree.accepted' => 'Please accept the terms of use',
        ];
    }
}
