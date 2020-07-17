<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class ProductCategory
 * @package App\Models\Admin
 * @version July 6, 2020, 6:04 am UTC
 *
 * @property Marketplace $MarketplaceID
 * @property \Illuminate\Database\Eloquent\Collection $productSubCategories
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $MarketplaceID
 * @property string $Name
 */
class ProductCategory extends Model
{

    public $table = 'product_categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceID',
        'Name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'MarketplaceID' => 'integer',
        'Name' => 'string'
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
     * @return BelongsTo
     **/
    public function MarketplaceID()
    {
        return $this->belongsTo(Marketplace::class, 'MarketplaceID');
    }

    /**
     * @return HasMany
     **/
    public function productSubCategories()
    {
        return $this->hasMany(\App\Models\ProductSubCategory::class, 'ProductCategoryID');
    }

    /**
     * @return HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'ProductCategoryID');
    }
}
