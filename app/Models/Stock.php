<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Stock
 * @package App\Models
 * @version July 10, 2020, 2:59 am UTC
 *
 * @property \App\Models\Marketplace $marketplaces
 * @property \App\Models\MarketplaceOwner $marketplacesowner
 * @property \Illuminate\Database\Eloquent\Collection $marketplace1s
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $MarketplacesOwnerID
 * @property integer $MarketplacesID
 */
class Stock extends Model
{

    public $table = 'stocks';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplacesOwnerID',
        'MarketplacesID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplacesOwnerID' => 'integer',
        'MarketplacesID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplacesOwnerID' => 'required'
    ];

      /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplacesowner()
    {
        return $this->belongsTo(\App\Models\MarketplaceOwner::class, 'MarketplacesOwnerID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function marketplace()
    {
        return $this->hasOne(\App\Models\Marketplace::class, 'StockID');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'StockID');
    }
}
