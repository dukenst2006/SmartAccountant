<?php

namespace App\Repositories\Admin;

use App\Models\ProductSubCategory;
use App\Repositories\BaseRepository;

/**
 * Class ProductSubCategoryRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 6:04 am UTC
*/

class ProductSubCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ProductCategoryID',
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




    public function GetFavourite($CategoriesIds)
    {

        $ProductSubCategory = $this->allQuery()->with(['products'])
            ->wherein("ProductCategoryID", $CategoriesIds)
            ->where("favourite",true)
            ->select(['id','Name']) ->get();

        return $ProductSubCategory;
    }




    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductSubCategory::class;
    }
}
