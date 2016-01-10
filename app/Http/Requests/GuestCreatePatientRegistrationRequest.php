<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class GuestCreatePatientRegistrationRequest extends Request
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
        $rule = [
            'title' => 'required|validTitle|max:10',
            'email' => 'required|email|max:255|unique:users',
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'password' => 'required|confirmed|min:6',
            'street_address_one' => 'required|max:50',
            'street_address_two' => 'required|max:50',
            'state' => 'required|validState|max:30',
            'country' => 'required|validCountry',
            'postcode' => 'required|digits:4',
            'telephone' => array('required','numeric'),
            'mobile_phone' => array('required','numeric'),
            'practitioner_id' => 'integer|exists:practitioners,id',
            'practitioner_not_found' => 'boolean',
            'agree' => 'boolean|accepted'
        ];

        $practitioner_not_found = Request::get('practitioner_not_found');

        if ($practitioner_not_found) {

            $addition = [
                'practitioner_not_found_practitioner_name' => 'required|max:30',
                'practitioner_not_found_state' => 'required|validState|max:30',
                'practitioner_not_found_country' => 'required|validCountry',
                'practitioner_not_found_postcode' => 'required|digits:4',
                'practitioner_not_found_clinic' => 'required|max:50'
            ];

            $rule = array_merge($rule, $addition);
        }

        return $rule;
    }

    public function messages()
    {
        return [
            'agree.accepted' => 'Please accept the terms of use'
        ];
    }
}
