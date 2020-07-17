<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Inventory
 * @package App\Models
 * @version July 10, 2020, 9:46 pm UTC
 *
 * @property Marketplace $marketplaces
 * @property Warehouse $warehouse
 * @property Collection $products
 * @property integer $MarketplaceID
 * @property integer $WarehouseID
 */
class Inventory extends Model
{

    public $table = 'inventories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceID',
        'WarehouseID'
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplaceID' => 'integer',
        'WarehouseID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplaceID' => 'required',
        'WarehouseID' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function marketplace()
    {
        return $this->belongsTo(Marketplace::class, 'MarketplaceID');
    }

    /**
     * @return BelongsTo
     **/
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'WarehouseID');
    }

    /**
     * @return HasMany
     **/
    public function products()
    {
        return $this->hasMany(Product::class, 'InventoryID');
    }
}
