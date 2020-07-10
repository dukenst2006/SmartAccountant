<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Supplier;

class CreateSupplierRequest extends FormRequest
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
        return Supplier::$rules;
    }
    public function attributes()
    {
        return [
            "Name"          =>  __("employee.name"),
            "CompanyID"     =>  __("Models/Supplier.Company"),
            "PhoneNumber"   =>  __("employee.phone"),
        ];
    }
}
