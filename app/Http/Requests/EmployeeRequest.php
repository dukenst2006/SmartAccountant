<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' =>'required',
            'image' =>'required',
            'nation' =>'required',
            'job' =>'required',
            'identity_number' =>'required',
            'identity_img' =>'required',
            'contract_img' =>'required',
            'phone' =>'required',
            'bank_account' =>'required',
            'sex' =>'required',
            'salary' =>'required',
            'brench_id' =>'required',
        ];
    }
}
