<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Stock
 * @package App\Models
 * @version July 10, 2020, 2:59 am UTC
 *
 * @property \App\Models\Marketplace $marketplacesid
 * @property \App\Models\MarketplaceOwner $marketplacesownerid
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
    public function marketplacesid()
    {
        return $this->belongsTo(\App\Models\Marketplace::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplacesownerid()
    {
        return $this->belongsTo(\App\Models\MarketplaceOwner::class, 'MarketplacesOwnerID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function marketplace1s()
    {
        return $this->hasMany(\App\Models\Marketplace::class, 'StockID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'StockID');
    }
}
