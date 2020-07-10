<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Marketplace;

class CreateMarketplaceRequest extends FormRequest
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
        return Marketplace::$rules;
    }
    public function attributes()
    {
        return [
            'Name' => __('employee.name'),
            'Country' => __('branch.country'),
            'City' => __('branch.city'),
            'SupervisorPhoneNumber' => __('employee.phone'),
            'Address' => __('branch.address'),
            'TaxNumber' => __('bills.tax_number'),
            'Email' => __('branch.email'),
            'Latitude' => __('branch.lat'),
            'Longitude' => __('branch.long'),
            'SafeBalance' => "الرصيد",
            'CompanyRegisterImage' => "صورة السجل التجاري",
        ];
    }
}
