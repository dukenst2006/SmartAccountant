<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ProductSubCategory
 * @package App\Models\Admin


 * @version July 6, 2020, 6:04 am UTC
 *
 * @property \App\Models\ProductCategory $productcategoryid
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $ProductCategoryID
 * @property string $Name
 */
class ProductSubCategory extends Model
{

    public $table = 'product_sub_categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'ProductCategoryID',
        'Name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'ProductCategoryID' => 'integer',
        'Name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ProductCategoryID' => 'required',
        'Name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productcategoryid()
    {
        return $this->belongsTo(\App\Models\ProductCategory::class, 'ProductCategoryID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'ProductSubCategoryID');
    }
}
