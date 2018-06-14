<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationPractitionerSearchRequest extends Request
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
            'practitioner_state' => 'validState|max:30',
            'practitioner_country' => 'required|validCountry',
            'practitioner_suburb' => 'max:30',
            'practitioner_postcode' => 'digits:4',
            'practitioner_clinic' => 'max:50',
            'practitioner_first_name' => 'max:30',
            'practitioner_last_name' => 'max:30'
        ];
    }
}
