<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Warehouse
 * @package App\Models
 * @version July 10, 2020, 9:47 pm UTC
 *
 * @property MarketplaceOwner $marketplaceowner
 * @property Collection $inventories
 * @property Collection $products
 * @property integer $MarketplaceOwnerID
 */
class Warehouse extends Model
{

    public $table = 'warehouses';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceOwnerID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplaceOwnerID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplaceOwnerID' => 'required'
    ];

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
    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'WarehouseID');
    }

    /**
     * @return HasMany
     **/
    public function products()
    {
        return $this->hasMany(Product::class, 'WarehouseID');
    }
}
