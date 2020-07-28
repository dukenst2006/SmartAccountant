<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class ProductCategory
 * @package App\Models\Admin
 * @version July 6, 2020, 6:04 am UTC
 *
 * @property Marketplace $MarketplaceOwner
 * @property Collection $productSubCategories
 * @property Collection $products
 * @property integer $MarketplaceOwnerID
 * @property string $Name
 */
class ProductCategory extends Model
{

    public $table = 'product_categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceOwnerID',
        'Name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'MarketplaceOwnerID' => 'integer',
        'Name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function MarketplaceOwnerID()
    {
        return $this->belongsTo(MarketplaceOwner::class, 'MarketplaceOwnerID');
    }

    /**
     * @return HasMany
     **/
    public function productSubCategories()
    {
        return $this->hasMany(ProductSubCategory::class, 'ProductCategoryID');
    }

    /**
     * @return HasMany
     **/
    public function products()
    {
        return $this->hasMany(Product::class, 'ProductCategoryID');
    }
}
