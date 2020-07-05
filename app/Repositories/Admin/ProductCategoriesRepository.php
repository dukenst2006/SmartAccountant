<?php

namespace App\Repositories\Admin;

use App\Models\ProductCategories;
use App\Repositories\BaseRepository;

/**
 * Class ProductCategoriesRepository
 * @package App\Repositories\Admin
 * @version July 5, 2020, 8:28 am UTC
*/

class ProductCategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplacesID',
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
        return ProductCategories::class;
    }
}
