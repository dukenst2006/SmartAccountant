<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class Marketplace
 * @package App\Models\Admin
 * @version July 5, 2020, 3:24 am UTC
 *
 * @property \App\Models\Admin\MarketplaceOwner $marketplaceownerid
 * @property \Illuminate\Database\Eloquent\Collection $employees
 * @property \Illuminate\Database\Eloquent\Collection $expenses
 * @property \Illuminate\Database\Eloquent\Collection $invoices
 * @property \Illuminate\Database\Eloquent\Collection $productCategories
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property \Illuminate\Database\Eloquent\Collection $safes
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
        'CompanyRegisterImage',
        'Logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
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
        'CompanyRegisterImage' => 'string',
        'Logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplaceOwnerID' => 'required',
        'Name' => 'required',
        'Country' => 'required',
        'City' => 'required',
        'SupervisorPhoneNumber' => 'required',
        'Address' => 'required',
        'TaxNumber' => 'required',
        'Email' => 'required',
        'Latitude' => 'required',
        'Longitude' => 'required',
        'CompanyRegisterImage' => 'required',
        'Logo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplaceownerid()
    {
        return $this->belongsTo(\App\Models\Admin\MarketplaceOwner::class, 'MarketplaceOwnerID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Admin\Employee::class, 'MarketplaceID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expenses()
    {
        return $this->hasMany(\App\Models\Admin\Expense::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(\App\Models\Admin\Invoice::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productCategories()
    {
        return $this->hasMany(\App\Models\Admin\ProductCategory::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Admin\Product::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function safes()
    {
        return $this->hasMany(\App\Models\Admin\Safe::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stocks()
    {
        return $this->hasMany(\App\Models\Admin\Stock::class, 'MarketplacesID');
    }
}
