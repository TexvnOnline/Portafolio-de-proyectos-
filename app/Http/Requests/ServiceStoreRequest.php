<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
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
            'name'=>'required',
            'slug'=>'required|unique:services,slug',
            'shortDescription'=>'required',
            'longDescription'=>'required',
            'icon'=>'required',
            'image'=>'dimensions:min_width=400,min_height=250|required|max:10000|dimensions:max_width=400,max_height=250|mimes:jpeg,png,jpg',
        ];
    }
}
