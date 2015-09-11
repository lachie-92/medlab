<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CompanySearchRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'company_state' => 'required|validState|max:30',
            'company_country' => 'required|validCountry|max:2',
            'company_suburb' => 'max:30',
            'company_postcode' => 'digits:4',
            'company_name' => 'max:50',
            'company_type' => 'validBusinessType',
            'company_business_number' => 'integer',
        ];
    }
}
