<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ExpensesSubCategory

 * @package App\Models\Admin
=======
 * @version July 6, 2020, 6:10 am UTC
 *
 * @property \App\Models\ExpensesCategory $expensescategoryid
 * @property \Illuminate\Database\Eloquent\Collection $expenses
 * @property integer $ExpensesCategoryID
 * @property string $Name
 */
class ExpensesSubCategory extends Model
{

    public $table = 'expenses_sub_categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'ExpensesCategoryID',
        'Name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'ExpensesCategoryID' => 'integer',
        'Name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ExpensesCategoryID' => 'required',
        'Name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function expensescategoryid()
    {
        return $this->belongsTo(\App\Models\ExpensesCategory::class, 'ExpensesCategoryID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expenses()
    {
        return $this->hasMany(\App\Models\Expense::class, 'ExpensesSubCategoriesID');
    }
}
