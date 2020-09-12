<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyUpdateRequest extends FormRequest
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
            'about'=>'required',
            'whoAreWe'=>'required',
            'our'=>'required',
            'whatWeDo'=>'required',
            'shyChooseUs'=>'required',
            'saveTimeWithUs'=>'required',
            'DedicatedSupport'=>'required',
        ];
    }
}
