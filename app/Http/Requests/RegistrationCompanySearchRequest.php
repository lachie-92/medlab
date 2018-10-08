<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationCompanySearchRequest extends Request
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
            'company_state' => 'validState|max:30',
            'company_country' => 'required|validCountry',
            'company_suburb' => 'max:30',
            'company_postcode' => 'digits:4',
            'company_name' => 'max:50',
            'company_type' => 'validBusinessType',
            'company_business_number' => 'numeric',
        ];
    }
}
