<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Employee;

class CreateEmployeeRequest extends FormRequest
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
        return Employee::$rules;
    }
    public function attributes()
    {
        return [
            "Name"                      =>  __('employee.name'),
            'Nationality'               =>  __('employee.nation'),
            'JobTitle'                  => __('employee.job'),
            'NationalID'                => __('employee.identity_number'),
            'PhoneNumber'               => __('employee.phone'),
            'ProfileImage'              => __('employee.image'),
            'IdentityImage'             => __('employee.identity_img'),
            'EmploymentContractImage'   => __('employee.contract_img'),
            'IBAN'                      => __('employee.bank_account'),
            'Sex'                       => __('employee.sex'),
            'Salary'                    => __('employee.salary')
        ];
    }
}
