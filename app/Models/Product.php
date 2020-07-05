<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Product
 * @package App\Models\
 * @version July 5, 2020, 8:22 am UTC
 *
 * @property \App\Models\Marketplace $marketplacesid
 * @property \App\Models\ProductCategory $productcategoryid
 * @property \App\Models\ProductSubCategory $productsubcategoryid
 * @property \App\Models\QuantityType $quantitytypeid
 * @property \App\Models\User $userid
 * @property \Illuminate\Database\Eloquent\Collection $invoiceItems
 * @property integer $UserID
 * @property integer $MarketplacesID
 * @property integer $ProductCategoryID
 * @property integer $ProductSubCategoryID
 * @property string $Name
 * @property number $Quantity
 * @property integer $QuantityTypeID
 * @property number $PurchasingPrice
 * @property number $SellingPrice
 * @property number $LowPrice
 * @property string $Image
 * @property string $ExpiryDate
 * @property string $Barcode
 * @property boolean $UnlimitedQuantity
 */
class Product extends Model
{

    public $table = 'products';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'UserID',
        'MarketplacesID',
        'ProductCategoryID',
        'ProductSubCategoryID',
        'Name',
        'Quantity',
        'QuantityTypeID',
        'PurchasingPrice',
        'SellingPrice',
        'LowPrice',
        'Image',
        'ExpiryDate',
        'Barcode',
        'UnlimitedQuantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'UserID' => 'integer',
        'MarketplacesID' => 'integer',
        'ProductCategoryID' => 'integer',
        'ProductSubCategoryID' => 'integer',
        'Name' => 'string',
        'Quantity' => 'float',
        'QuantityTypeID' => 'integer',
        'PurchasingPrice' => 'float',
        'SellingPrice' => 'float',
        'LowPrice' => 'float',
        'Image' => 'string',
        'ExpiryDate' => 'string',
        'Barcode' => 'string',
        'UnlimitedQuantity' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'UserID' => 'required',
        'MarketplacesID' => 'required',
        'ProductCategoryID' => 'required',
        'Name' => 'required',
        'Quantity' => 'required',
        'QuantityTypeID' => 'required',
        'PurchasingPrice' => 'required',
        'SellingPrice' => 'required',
        'Image' => 'required',
        'Barcode' => 'required',
        'UnlimitedQuantity' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplacesid()
    {
        return $this->belongsTo(\App\Models\Marketplace::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productcategoryid()
    {
        return $this->belongsTo(\App\Models\ProductCategory::class, 'ProductCategoryID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productsubcategoryid()
    {
        return $this->belongsTo(\App\Models\ProductSubCategory::class, 'ProductSubCategoryID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function quantitytypeid()
    {
        return $this->belongsTo(\App\Models\QuantityType::class, 'QuantityTypeID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function userid()
    {
        return $this->belongsTo(\App\Models\User::class, 'UserID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoiceItems()
    {
        return $this->hasMany(\App\Models\InvoiceItem::class, 'ProductID');
    }
}
