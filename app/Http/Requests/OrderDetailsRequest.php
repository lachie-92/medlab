<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderDetailsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $order = Order::find(Request::get('order'));
        $user = Auth::user();

        if($order->user_id == $user->id) {
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
