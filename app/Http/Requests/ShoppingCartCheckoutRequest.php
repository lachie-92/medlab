<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Order;
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
        $order = Order::find(Request::get('order'));

        if ($order != null && $order->user_id == Auth::user()->id) {
            if ($order->order_status == 'New Order') {
                return true;
            }
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
            'stripeToken' => 'required',
            'order' => 'required|exists:orders,id'
        ];
    }

    public function messages()
    {
        return [
            'stripeToken.required' => 'There was a problem communicating with our payment processer. Please contact support',
        ];
    }
}
