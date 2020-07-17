<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ExpensesCategory

 * @package App\Models
 * @version July 6, 2020, 6:10 am UTC
 *
 * @property \App\Models\Marketplace $MarketplaceID
 * @property \Illuminate\Database\Eloquent\Collection $expenses
 * @property \Illuminate\Database\Eloquent\Collection $expensesSubCategories
 * @property integer $MarketplaceID
 * @property string $Name
 */
class ExpensesCategory extends Model
{

    public $table = 'expenses_categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceID',
        'Name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'MarketplaceID' => 'integer',
        'Name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplaceID' => 'required',
        'Name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function MarketplaceID()
    {
        return $this->belongsTo(\App\Models\Marketplace::class, 'MarketplaceID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expenses()
    {
        return $this->hasMany(\App\Models\Expense::class, 'ExpensesCategoriesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expensesSubCategories()
    {
        return $this->hasMany(\App\Models\ExpensesSubCategory::class, 'ExpensesCategoryID');
    }
}
