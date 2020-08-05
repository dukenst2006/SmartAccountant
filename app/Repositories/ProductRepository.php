<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Warehouse;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

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
        'MarketplaceOwnerID',
        'MarketplaceID',
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

   return $query->orderBy('Name')->select(
        [
            'id',
            'Name',
            'Barcode',
            'Quantity',
            'UnlimitedQuantity',
            'SellingPrice',
            'WarehouseID',
            'InventoryID',
        ]
    )-> when(request('q'), function ($query, $role) {
        $query->where('Barcode','like','%'.request('q').'%')
            ->orWhere('Name','like','%'.request('q').'%');

    })->limit(10)->get();




}

/*

Get Top 10 Stored Product


 * */
    public function GetTop10InWarehouse(){

        $query = $this->model->newQuery();
             $id = Warehouse::query()->where('MarketplaceOwnerID',$this->GetMyOwner())->first()->id;
        return $query->orderBy('Quantity','DESC')->where('WarehouseID',$id)->select(['Name','Quantity'])->take(10)->get();






    }



    /**
     * Create model record
     *
     * @param  array  $input
     *
     * @return Model
     */
    public function create($input)
    {
        $model = $this->model->newInstance($input);

        $model->MarketplaceOwnerID = $this->GetMyOwner();
        $model->WarehouseID= Warehouse::where('MarketplaceOwnerID',$this->GetMyOwner())->first()->id;

        $model->save();

        return $model;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
