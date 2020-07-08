<?php

namespace App\Repositories\Admin;

use App\Models\ExpensesSubCategory;
use App\Repositories\BaseRepository;

/**
 * Class ExpensesSubCategoryRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 6:10 am UTC
*/

class ExpensesSubCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ExpensesCategoryID',
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
        return ExpensesSubCategory::class;
    }
}
