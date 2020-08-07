<?php

namespace App\Repositories\Admin;

use App\Models\ProductCategory;
use App\Notifications\Products;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategoryRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 6:04 am UTC
*/

class ProductCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplaceOwnerID',
        'Name'
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
        return ProductCategory::class;
    }


    public function GetFavourite()
    {

        $ProductCategory = $this->allQuery()->with(['products'])
            ->where("MarketplaceOwnerID", 1)
            ->where("favourite",true)
            ->select(['id','Name']) ->get();

 return $ProductCategory;
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
        $model->save();

        return $model;
    }

}
