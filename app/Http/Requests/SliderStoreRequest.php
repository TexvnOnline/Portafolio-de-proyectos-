<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderStoreRequest extends FormRequest
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
            'imagen'=>'dimensions:min_width=1600,min_height=800|required|max:10000|dimensions:max_width=1600,max_height=800|mimes:jpeg,png,jpg',
        ];
    }
}
