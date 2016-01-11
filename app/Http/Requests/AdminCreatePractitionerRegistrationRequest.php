<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminCreatePractitionerRegistrationRequest extends Request
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
            'change_password' => 'boolean',
            'password' => 'confirmed|min:6',
            'provider_number' => 'required|numeric',
            'telephone' => array('required','regex:/^[0-9 ]+$/', 'max:20'),
            'mobile_phone' => array('required','regex:/^[0-9 ]+$/', 'max:20'),
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
