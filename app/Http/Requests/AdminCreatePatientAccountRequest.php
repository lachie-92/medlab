<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Patient_Registration;
use Illuminate\Support\Facades\Auth;

class AdminCreatePatientAccountRequest extends Request
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

        if ($registration == null) {
            return false;
        }

        // Stop account creation if the registration account has already been created
        if ($registration->approval) {
            return false;
        }

        // Stop account creation if the registration is deleted
        if ($registration->deleted_at) {
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
            'change_password' => 'boolean',
            'password' => 'confirmed|min:6|max:255',
            'street_address_one' => 'required|max:50',
            'street_address_two' => 'required|max:50',
            'state' => 'required|validState|max:30',
            'country' => 'required|validCountry',
            'postcode' => 'required|digits:4',
            'telephone' => array('required','regex:/^[0-9 ]+$/', 'max:20'),
            'mobile_phone' => array('required','regex:/^[0-9 ]+$/', 'max:20'),
            'practitioner_id' => 'required|numeric|exists:practitioners,id',
        ];
    }

    public function messages()
    {
        return [
            'practitioner_id.required' => 'You must select a Practitioner for the Patient',
        ];
    }
}
