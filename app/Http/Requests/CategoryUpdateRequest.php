<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'slug'=>'required|unique:categories,slug,'.$this->category,
            'description'=>'required',
            'imagen'=>'dimensions:min_width=175,min_height=50|required|max:10000|dimensions:max_width=175,max_height=50|mimes:jpeg,png,jpg',
        ];
    }
}
