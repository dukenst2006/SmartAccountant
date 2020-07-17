<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Expense
 * @package App\Models
 * @version July 6, 2020, 6:04 am UTC
 *
 * @property \App\Models\ExpensesCategory $expensescategoriesid
 * @property ExpensesSubCategory $expensessubcategoriesid
 * @property Marketplace $Marketplace
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
        'MarketplaceID',
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
        'MarketplaceID' => 'integer',
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
        'MarketplaceID' => 'required',
        'ExpensesCategoriesID' => 'required',
        'Name' => 'required',
        'Price' => 'required',
        'Description' => 'required',
        'Date' => 'required'
    ];

    protected $with = ['marketplace:id,Name', 'expensescategory:id,Name', 'expensessubcategory:id,Name'];
    /**
     * @return BelongsTo
     **/
    public function expensescategory()
    {
        return $this->belongsTo(\App\Models\ExpensesCategory::class, 'ExpensesCategoriesID');
    }

    /**
     * @return BelongsTo
     **/
    public function expensessubcategory()
    {
        return $this->belongsTo(ExpensesSubCategory::class, 'ExpensesSubCategoriesID');
    }

    /**
     * @return BelongsTo
     **/
    public function marketplace()
    {
        return $this->belongsTo(Marketplace::class, 'MarketplaceID');
    }
}
