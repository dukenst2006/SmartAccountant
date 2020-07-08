<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marketplace
 * @package App\Models\Admin
 * @version July 6, 2020, 5:37 am UTC
 *
 * @property \App\Models\MarketplaceOwner $marketplaceownerid
 * @property \Illuminate\Database\Eloquent\Collection $employees
 * @property \Illuminate\Database\Eloquent\Collection $expenses
 * @property \Illuminate\Database\Eloquent\Collection $expensesCategories
 * @property \Illuminate\Database\Eloquent\Collection $invoices
 * @property \Illuminate\Database\Eloquent\Collection $productCategories
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property \Illuminate\Database\Eloquent\Collection $stocks
 * @property integer $MarketplaceOwnerID
 * @property string $Name
 * @property string $Country
 * @property string $City
 * @property string $SupervisorPhoneNumber
 * @property string $Address
 * @property string $TaxNumber
 * @property string $Email
 * @property string $Latitude
 * @property string $Longitude
 * @property number $SafeBalance
 * @property string $CompanyRegisterImage
 * @property string $Logo
 */
class Marketplace extends Model
{

    public $table = 'marketplaces';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceOwnerID',
        'Name',
        'Country',
        'City',
        'SupervisorPhoneNumber',
        'Address',
        'TaxNumber',
        'Email',
        'Latitude',
        'Longitude',
        'SafeBalance',
        'CompanyRegisterImage',
        'Logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplaceOwnerID' => 'integer',
        'Name' => 'string',
        'Country' => 'string',
        'City' => 'string',
        'SupervisorPhoneNumber' => 'string',
        'Address' => 'string',
        'TaxNumber' => 'string',
        'Email' => 'string',
        'Latitude' => 'string',
        'Longitude' => 'string',
        'SafeBalance' => 'float',
        'CompanyRegisterImage' => 'string',
        'Logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required',
        'Country' => 'required',
        'City' => 'required',
        'SupervisorPhoneNumber' => 'required',
        'Address' => 'required',
        'TaxNumber' => 'required',
        'Email' => 'required',
        'Latitude' => 'required',
        'Longitude' => 'required',
        'SafeBalance' => 'required',
        'CompanyRegisterImage' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplaceownerid()
    {
        return $this->belongsTo(\App\Models\MarketplaceOwner::class, 'MarketplaceOwnerID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class, 'MarketplaceID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function supervisor()
    {
        return $this->hasMany(\App\Models\Admin\Supervisor::class, 'MarketplaceID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expenses()
    {
        return $this->hasMany(\App\Models\Expense::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expensesCategories()
    {
        return $this->hasMany(\App\Models\ExpensesCategory::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(\App\Models\Invoice::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productCategories()
    {
        return $this->hasMany(\App\Models\ProductCategory::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function Products()
    {
        return $this->hasMany(\App\Models\Product::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stocks()
    {
        return $this->hasMany(\App\Models\Stock::class, 'MarketplacesID');
    }
}
