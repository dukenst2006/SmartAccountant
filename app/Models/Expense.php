<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expense
 * @package App\Models\Admin
 * @version July 6, 2020, 6:04 am UTC
 *
 * @property \App\Models\ExpensesCategory $expensescategoriesid
 * @property \App\Models\ExpensesSubCategory $expensessubcategoriesid
 * @property \App\Models\Marketplace $marketplacesid
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
        'id' => 'integer',
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

    protected $with = ['marketplace:id,Name', 'expensescategory:id,Name', 'expensessubcategory:id,Name'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function expensescategory()
    {
        return $this->belongsTo(\App\Models\ExpensesCategory::class, 'ExpensesCategoriesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function expensessubcategory()
    {
        return $this->belongsTo(\App\Models\ExpensesSubCategory::class, 'ExpensesSubCategoriesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplace()
    {
        return $this->belongsTo(\App\Models\Marketplace::class, 'MarketplacesID');
    }
}
