<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartPaymentOptionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = [
            'payment_option' => 'required|validPaymentOption',
        ];

        $paymentOption = Request::get('payment_option');

        if ($paymentOption == 'visa') {

            $addition = [
                'title' => 'required|validTitle|max:10',
                'first_name' => 'required|max:30',
                'last_name' => 'required|max:30',
                'street_address_one' => 'required|max:50',
                'street_address_two' => 'required|max:50',
                'city' => 'required|max:30',
                'state' => 'required|validState|max:30',
                'country' => 'required|validCountry|max:2',
                'postcode' => 'required|digits:4',
            ];

            $rule = array_merge($rule, $addition);
        }

        return $rule;
    }

    public function messages()
    {
        return [
            'payment_option.required' => 'You must select a Payment Option'
        ];
    }
}
