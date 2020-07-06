<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class Expense
 * @package App\Models\Admin
 * @version July 6, 2020, 6:04 am UTC
 *
 * @property \App\Models\Admin\ExpensesCategory $expensescategoriesid
 * @property \App\Models\Admin\ExpensesSubCategory $expensessubcategoriesid
 * @property \App\Models\Admin\Marketplace $marketplacesid
 * @property integer $MarketplacesID
 * @property integer $ExpensesCategoriesID
 * @property integer $ExpensesSubCategoriesID
 * @property string $Name
 * @property number $Price
 * @property string $Description
 * @property string|\Carbon\Carbon $Date
 */
class Expense extends Model
{

    public $table = 'expenses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplacesID',
        'ExpensesCategoriesID',
        'ExpensesSubCategoriesID',
        'Name',
        'Price',
        'Description',
        'Date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'MarketplacesID' => 'integer',
        'ExpensesCategoriesID' => 'integer',
        'ExpensesSubCategoriesID' => 'integer',
        'Name' => 'string',
        'Price' => 'float',
        'Description' => 'string',
        'Date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplacesID' => 'required',
        'ExpensesCategoriesID' => 'required',
        'Name' => 'required',
        'Price' => 'required',
        'Description' => 'required',
        'Date' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function expensescategoriesid()
    {
        return $this->belongsTo(\App\Models\Admin\ExpensesCategory::class, 'ExpensesCategoriesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function expensessubcategoriesid()
    {
        return $this->belongsTo(\App\Models\Admin\ExpensesSubCategory::class, 'ExpensesSubCategoriesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplacesid()
    {
        return $this->belongsTo(\App\Models\Admin\Marketplace::class, 'MarketplacesID');
    }
}
