<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderViewDetailsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $order = Order::find(Request::get('order'));

        if ($order == null) {
            return false;
        }

        // Allow Admin to access all orders
        if (Auth::user()->group == 'Admin') {
            return true;
        }

        // Allow owner of the order to access
        if ($order->user_id == Auth::user()->id) {
            return true;
        }

        return false;
    }

    /**
     * This method will be invoked if authorize() fails
     */
    public function forbiddenResponse()
    {
        return redirect('/account');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'order' => 'required|integer|exists:orders,id',
        ];
    }
}
