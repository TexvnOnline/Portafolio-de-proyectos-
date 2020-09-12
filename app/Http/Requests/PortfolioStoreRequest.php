<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioStoreRequest extends FormRequest
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
            'category_id'=>'required|integer',
            'name'=>'required',
            'slug'=>'required|unique:portfolios,slug',
            'description'=>'required',
            'skills'=>'required',
            'client'=>'required',
            'url'=>'required',
            'image'=>'dimensions:min_width=550,min_height=500|required|max:10000|dimensions:max_width=550,max_height=500|mimes:jpeg,png,jpg',
        ];
    }
}
