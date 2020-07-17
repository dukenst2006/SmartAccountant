<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Expense;

class CreateExpenseRequest extends FormRequest
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
        return Expense::$rules;
    }
    public function attributes()
    {
        return [
            'MarketplaceID' => "الفرع",
            'ExpensesCategoriesID' =>__('expenses.expenses_category'),
            'Name' => "الاسم",
            'Price' => "السعر",
            'Description' => "الوصف",
            'Date' => "التاريخ",
        ];
    }
}
