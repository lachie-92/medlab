<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Patient_Registration;
use Illuminate\Support\Facades\Auth;

class PatientAccountRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Get the route model binding
        $registration = $this->route()->parameter('patientRegistrationId');

        // Stop account creation if the registration is already approved
        if ($registration->approval) {
            return false;
        }

        // Stop account creation if the registration is deleted
        if ($registration->deleted_at) {
            return false;
        }

        if (Auth::user()->group != 'Admin') {
            return false;
        }

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
            'change_password' => 'required|boolean',
            'password' => 'confirmed|min:6',
            'street_address_one' => 'required|max:50',
            'street_address_two' => 'required|max:50',
            'city' => 'required|max:30',
            'state' => 'required|validState|max:30',
            'country' => 'required|validCountry|max:2',
            'postcode' => 'required|digits:4',
            'telephone' => array('required','regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'),
            'mobile_phone' => array('required','regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'),
            'practitioner_id' => 'required|integer|exists:practitioners,id',
        ];
    }

    public function messages()
    {
        return [
            'practitioner_id.required' => 'You must select a Practitioner for the Patient',
        ];
    }
}
