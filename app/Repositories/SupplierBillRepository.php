<?php

namespace App\Repositories;

use App\Models\SupplierBill;
use App\Repositories\BaseRepository;

/**
 * Class SupplierBillRepository
 * @package App\Repositories
 * @version July 26, 2020, 1:30 am UTC
*/

class SupplierBillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Amount',
        'Paid',
        'Rest',
        'note'
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
        return SupplierBill::class;
    }
}
