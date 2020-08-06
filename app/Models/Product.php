<?php

namespace App\Models;

use App\Bonds;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Product
 * @package App\Models
 * @version July 6, 2020, 5:44 am UTC
 *
 * @property ProductCategory $productcategory
 * @property ProductSubCategory $productsubcategory
 * @property Warehouse $warehouse
 * @property Inventory $inventory
 * @property QuantityType $quantitytype
 * @property User $user
 * @property Collection $invoiceItems
 * @property integer $MarketplaceOwnerID
 * @property integer $MarketplaceID
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
        'MarketplaceOwnerID',
        'ProductCategoryID',
        'ProductSubCategoryID',
        'WarehouseID' ,
        'InventoryID',
        'Name',
        'Quantity',
        'QuantityTypeID',
        'PurchasingPrice',
        'SellingPrice',
        'LowPrice',
        'Image',
        'ExpiryDate',
        'Barcode',
        'UnlimitedQuantity',
        'ExcludeFromVAT'
    ];

//protected $with= ['stock.marketplace:id' ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'MarketplaceOwnerID' => 'integer',
        'ProductCategoryID' => 'integer',
        'ProductSubCategoryID' => 'integer',
        'WarehouseID' => 'integer',
        'InventoryID' => 'integer',
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
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['warehouse'];

    /**
     * @return BelongsTo
     **/
    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'InventoryID');
    }






    /**
     * @return BelongsTo
     **/
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'WarehouseID');
    }




    /**
     * @return BelongsTo
     **/
    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class, 'ProductCategoryID');
    }

    /**
     * @return BelongsTo
     **/
    public function productsubcategory()
    {
        return $this->belongsTo(ProductSubCategory::class, 'ProductSubCategoryID');
    }

    /**
     * @return BelongsTo
     **/
    public function quantitytype()
    {
        return $this->belongsTo(QuantityType::class, 'QuantityTypeID');
    }

    /**
     * @return BelongsTo
     **/
    public function marketplaceOwner()
    {
        return $this->belongsTo(MarketplaceOwner::class, 'MarketplaceOwnerID');
    }

    /**
     * This relation return all bonds related to this product.
     *
     * @return HasMany
     **/
    public function bonds()
    {
        return $this->hasMany(Bonds::class);
    }
    public function invoices(){
        return $this->hasMany(InvoiceItem::class,'ProductID','id');
    }
}
