<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class Product
 * @package App\Models\Admin
 * @version July 5, 2020, 8:22 am UTC
 *
 * @property \App\Models\Admin\Marketplace $marketplacesid
 * @property \App\Models\Admin\ProductCategory $productcategoryid
 * @property \App\Models\Admin\ProductSubCategory $productsubcategoryid
 * @property \App\Models\Admin\QuantityType $quantitytypeid
 * @property \App\Models\Admin\User $userid
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
        return $this->belongsTo(\App\Models\Admin\Marketplace::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productcategoryid()
    {
        return $this->belongsTo(\App\Models\Admin\ProductCategory::class, 'ProductCategoryID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productsubcategoryid()
    {
        return $this->belongsTo(\App\Models\Admin\ProductSubCategory::class, 'ProductSubCategoryID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function quantitytypeid()
    {
        return $this->belongsTo(\App\Models\Admin\QuantityType::class, 'QuantityTypeID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function userid()
    {
        return $this->belongsTo(\App\Models\Admin\User::class, 'UserID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoiceItems()
    {
        return $this->hasMany(\App\Models\Admin\InvoiceItem::class, 'ProductID');
    }
}
