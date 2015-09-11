<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class PractitionerAccountRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Get the route model binding
        $registration = $this->route()->parameter('practitionerRegistrationId');

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
            'provider_number' => 'required|integer',
            'telephone' => array('required','regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'),
            'mobile_phone' => array('required','regex:/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/'),
            'company_id' => 'required|integer|exists:companies,id',
        ];
    }

    public function messages()
    {
        return [
            'company_id.required' => 'You must select a Clinic for the Practitioner',
        ];
    }
}
