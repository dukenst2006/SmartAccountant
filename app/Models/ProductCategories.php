<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategories
 * @package App\Models\
 * @version July 5, 2020, 8:28 am UTC
 *
 * @property \\App\Models\Marketplace $MarketplaceID
 * @property \Illuminate\Database\Eloquent\Collection $productSubCategories
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $MarketplaceID
 * @property string $Name
 */
class ProductCategories extends Model
{

    public $table = 'product_categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceID',
        'Name',
        'favourite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplaceID' => 'integer',
        'Name' => 'string',
        'favourite' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplaceID' => 'required',
        'Name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function MarketplaceID()
    {
        return $this->belongsTo(\App\Models\Marketplace::class, 'MarketplaceID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productSubCategories()
    {
        return $this->hasMany(\App\Models\ProductSubCategory::class, 'ProductCategoryID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'ProductCategoryID');
    }
}
