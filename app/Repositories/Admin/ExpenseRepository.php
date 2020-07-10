<?php

namespace App\Repositories\Admin;

use App\Models\Expense;
use App\Repositories\BaseRepository;

/**
 * Class ExpenseRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 6:04 am UTC
*/

class ExpenseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplacesID',
        'ExpensesCategoriesID',
        'ExpensesSubCategoriesID',
        'Name',
        'Price',
        'Description',
        'Date'
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
        return Expense::class;
    }
}
