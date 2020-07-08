<?php

namespace App\Repositories\Admin;

use App\Models\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 5:44 am UTC
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




public function filter(){

    $query = $this->model->newQuery();

    $query->orderBy('name')->select(
        [
            'id',
            'Name',
            'Barcode',
            'Quantity',
            'UnlimitedQuantity',
            'SellingPrice',
            'quantity'
        ]
    )-> when(request('q'), function ($query, $role) {
        $query->where('barcode','like','%'.request('q').'%')
            ->orWhere('name','like','%'.request('q').'%')
            ->orWhere('category','like','%'.request('q').'%');

    })->limit(10)->get();




}




    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
