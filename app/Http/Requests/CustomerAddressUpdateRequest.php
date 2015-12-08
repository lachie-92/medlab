<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAddressUpdateRequest extends Request
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
            'street_address_one' => 'required|max:50',
            'street_address_two' => 'required|max:50',
            'city' => 'required|max:30',
            'state' => 'required|validState|max:30',
            'country' => 'required|validCountry',
            'postcode' => 'required|digits:4',
            'telephone' => array('required','numeric'),
            'mobile_phone' => array('required','numeric'),
        ];
    }
}
