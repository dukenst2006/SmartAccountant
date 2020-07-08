<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Product
 * @package App\Models\Admin
 * @version July 6, 2020, 5:44 am UTC
 *
 * @property Marketplace $Marketplace
 * @property ProductCategory $ProductCategory
 * @property ProductSubCategory $ProductSubCategory
 * @property QuantityType $QuantityType
 * @property User $User
 * @property Collection $invoiceItems
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
 * @property string|Carbon $ExpiryDate
 * @property string $Barcode
 * @property boolean $UnlimitedQuantity
 */
class Product extends Model
{

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
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
    public $table = 'products';
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
    protected $with = ['marketplace:id,name'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
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
        'ExpiryDate' => 'datetime',
        'Barcode' => 'string',
        'UnlimitedQuantity' => 'boolean'
    ];

    /**
     * @return BelongsTo
     **/
    public function Marketplace()
    {
        return $this->belongsTo(Marketplace::class, 'MarketplacesID');
    }

    /**
     * @return BelongsTo
     **/
    public function ProductCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'ProductCategoryID');
    }

    /**
     * @return BelongsTo
     **/
    public function ProductSubCategory()
    {
        return $this->belongsTo(ProductSubCategory::class, 'ProductSubCategoryID');
    }

    /**
     * @return BelongsTo
     **/
    public function QuantityType()
    {
        return $this->belongsTo(QuantityType::class, 'QuantityTypeID');
    }

    /**
     * @return BelongsTo
     **/
    public function User()
    {
        return $this->belongsTo(User::class, 'UserID');
    }


}
