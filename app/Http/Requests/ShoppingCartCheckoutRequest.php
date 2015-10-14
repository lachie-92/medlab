<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartCheckoutRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();
        $orderId = Request::get('order');
        $order = $user->orders()->where('id', $orderId)->first();

        if ($order != null && $order->order_status == 'New order') {
            return true;
        }

        return false;
    }

    /**
     * This method will be invoked if authorize() fails
     */
    public function forbiddenResponse()
    {
        return redirect('/shoppingcart/summary')->with('errors', collect(['Invalid Order']));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'payment_token' => 'required',
            'payment_type' => 'required|validPaymentOption',
            'order' => 'required|exists:orders,id'
        ];
    }

    public function messages()
    {
        return [
            'payment_token.required' => 'You must select a Payment Option'
        ];
    }
}
