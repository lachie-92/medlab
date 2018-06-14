<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminPatentUpdate extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->group == 'Admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product'             => 'required|max:255',
            'jurisdiction'        => 'required|max:255',
            'description'         => 'required',
            'application_number'  => 'required|max:255',
            'filing_date'         => 'required|date_format:d/m/Y',
            'status'              => 'required',
        ];
    }
}
