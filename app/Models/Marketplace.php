<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Marketplace
 * @package App\Models
 * @version July 6, 2020, 5:37 am UTC
 *
 * @property MarketplaceOwner $marketplaceowner
 * @property Collection $employees
 * @property Collection $expenses
 * @property Collection $expensesCategories
 * @property Collection $invoices
 * @property Collection $productCategories
 * @property Collection $products
 * @property Collection $stocks
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
        'SafeBalance',
        'CompanyRegisterImage',
        'CommercialRegister',
        'LeaseContract',
        'Attachment',
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
        'SafeBalance' => 'float',
        'CompanyRegisterImage' => 'string',
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
        'Email' =>['required', 'string', 'email', 'max:255', 'unique:marketplaces'],
        'SafeBalance' => 'required',
        'CompanyRegisterImage' => 'required',
    ];

    public $with = ['inventory'];

    /**
     * @return BelongsTo
     **/
    public function marketplaceowner()
    {
        return $this->belongsTo(MarketplaceOwner::class, 'MarketplaceOwnerID');
    }


    /**
     * @return HasMany
     **/
    public function supervisor()
    {
        return $this->hasMany(\App\Models\Supervisor::class, 'MarketplaceID');
    }
    /**
     * @return HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class, 'MarketplaceID');
    }

    /**
     * @return HasMany
     **/
    public function expenses()
    {
        return $this->hasMany(\App\Models\Expense::class, 'MarketplaceID');
    }

    /**
     * @return HasMany
     **/
    public function expensesCategories()
    {
        return $this->hasMany(\App\Models\ExpensesCategory::class, 'MarketplaceID');
    }

    /**
     * @return HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(\App\Models\Invoice::class, 'MarketplaceID');
    }

    /**
     * @return HasMany
     **/
    public function productCategories()
    {
        return $this->hasMany(\App\Models\ProductCategory::class, 'MarketplaceID');
    }



      /**
     * @return HasOne
     **/
    public function inventory()
    {
        return $this->hasOne(Inventory::class, 'MarketPlaceID','ID');
    }


}
