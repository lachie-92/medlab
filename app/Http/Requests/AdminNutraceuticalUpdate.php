<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminNutraceuticalUpdate extends Request
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
            'product_name_index'    => 'required|max:255',
            'product_name'          => 'required|max:255',
            'slug'                  => 'required|alpha_dash|max:255',
            'short_description'     => 'required|max:3000',
            'patent'                => 'required',
            'general_summary'       => 'required',
            'practitioner_summary'  => 'required',
            'references'            => 'required',
            'side_effects'          => 'required',
            'interactions'          => 'required',
            'dosage_information'    => 'required',
            'ingredients'           => 'required',
            'cmi'                   => 'required',
            'free_from'             => 'required',
            'features'              => 'required',
            'clinical_trials'       => 'required',
            'education'             => 'required',
            'productfaq'            => 'required',
            'conditions_associated' => 'required',
            'additional_resources'  => 'required',
            'in_stock'              => 'boolean',
            'price_retail'          => 'required|numeric',
            'price_wholesale'       => 'required|numeric',
            'image_path'            => 'mimes:jpeg,bmp,png',
            'thumb_image_path'      => 'mimes:jpeg,bmp,png',

        ];
    }
}
