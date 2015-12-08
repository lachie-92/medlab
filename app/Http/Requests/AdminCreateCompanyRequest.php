<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class AdminCreateCompanyRequest extends Request
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
            'company_name' => 'required|max:50',
            'company_type' => 'required|validBusinessType',
            'company_business_number' => 'required|numeric|unique:companies,business_number',
            'company_street' => 'required|max:50',
            'company_suburb' => 'required|max:30',
            'company_city' => 'required|max:30',
            'company_postcode' => 'required|digits:4',
            'company_state' => 'required|validState|max:30',
            'company_country' => 'required|validCountry',
        ];
    }
}
