<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartUpdateAddressRequest extends Request
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
            'shipping_title' => 'required|validTitle|max:10',
            'shipping_first_name' => 'required|max:30',
            'shipping_last_name' => 'required|max:30',
            'shipping_street_address_one' => 'required|max:50',
            'shipping_street_address_two' => 'required|max:50',
            'shipping_city' => 'required|max:30',
            'shipping_state' => 'required|validState|max:30',
            'shipping_country' => 'required|validCountry|max:2',
            'shipping_postcode' => 'required|digits:4',
            'shipping_phone' => array('required','numeric'),
            'billing_title' => 'required|validTitle|max:10',
            'billing_first_name' => 'required|max:30',
            'billing_last_name' => 'required|max:30',
            'billing_street_address_one' => 'required|max:50',
            'billing_street_address_two' => 'required|max:50',
            'billing_city' => 'required|max:30',
            'billing_state' => 'required|validState|max:30',
            'billing_country' => 'required|validCountry|max:2',
            'billing_postcode' => 'required|digits:4',
        ];
    }
}