<?php

namespace App\Repositories\Admin;

use App\Models\ExpensesCategory;
use App\Repositories\BaseRepository;

/**
 * Class ExpensesCategoryRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 6:10 am UTC
*/

class ExpensesCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplaceID',
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
        return ExpensesCategory::class;
    }
}
