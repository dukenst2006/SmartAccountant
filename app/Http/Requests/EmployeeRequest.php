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
            'Name'                  =>  'required',
            'Email'                 =>  'required',
            'Password'              =>  'required',
            'MarketplaceID'         =>  'required',
            'MarketplaceOwnerID'    =>  'required',
            'Nationality'           =>  'required',
            'JobTitle'              =>  'required',
            'NationalID'            =>  'required',
            'PhoneNumber'           =>  'required',
            'ProfileImage'          =>  'required',
            'IdentityImage'         =>  'required',
            'EmploymentContractImage'=> 'required',
            'IBAN'                  =>  'required',
            'Sex'                   =>  'required',
            'Salary'                =>  'required',
        ];
    }
}
