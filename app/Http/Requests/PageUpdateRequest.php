<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageUpdateRequest extends FormRequest
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
            'slider_id'=>'required|integer',
            'socials_id'=>'required|integer',
            'work_id'=>'required|integer',
            'contact_id'=>'required|integer',
            'company_id'=>'required|integer',
        ];
    }
}
