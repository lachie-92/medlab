<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class OrderStatusUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();

        if($user != null && $user->group == 'Admin') {
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
            'order_status' => 'required|ValidOrderStatus|max:20'
        ];
    }
}
