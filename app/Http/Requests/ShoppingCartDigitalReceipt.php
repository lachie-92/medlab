<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Medlab\Billing\BillingInterface;

class ShoppingCartDigitalReceipt extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @param BillingInterface $billing
     * @return bool
     */
    public function authorize(BillingInterface $billing)
    {
        $validReceipt =
            Request::has('vpc_SecureHash') &&
            Request::has('vpc_TxnResponseCode') &&
            Request::has('vpc_OrderInfo');

        if ($validReceipt) {

            $receiptSecureHash = Request::get('vpc_SecureHash');
            $receiptContents = Request::except('vpc_SecureHash');

            return $billing->validateSecureHash($receiptSecureHash, $receiptContents);
        }

        return false;
    }

    /**
     * This method will be invoked if authorize() fails
     */
    public function forbiddenResponse()
    {
        return redirect('/shoppingcart/summary')->with('errors', collect(['Invalid Receipt']));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
