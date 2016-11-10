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
            'primary_profession' => 'required|max:50',
            'association_number' => array('required','regex:/^[0-9]+$/', 'max:20'),
            'association_type' => 'required|max:50',
            'street_address_one' => 'required|max:50',
            'street_address_two' => 'required|max:50',
            'state' => 'required|validState|max:30',
            'country' => 'required|validCountry',
            'postcode' => 'required|digits:4',
            'telephone' => array('required','regex:/^[0-9 ]+$/', 'max:20'),
            'mobile_phone' => array('required','regex:/^[0-9 ]+$/', 'max:20'),
            'agree' => 'boolean|accepted',

            'been_bankrupt' => 'required_if:credit_application,1',
            'been_refused_credit' => 'required_if:credit_application,1',

        ];
    }

    public function messages()
    {
        return [
            'agree.accepted' => 'Please accept the terms of use',
            'been_bankrupt.required_if' => 'Please answer the question regarding Bankruptcy for your Credit Application',
            'been_refused_credit.required_if' => 'Please answer the question regarding Credit for your Credit Application'
        ];
    }
}
