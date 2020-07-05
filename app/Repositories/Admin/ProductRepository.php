<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories\Admin
 * @version July 5, 2020, 8:22 am UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
