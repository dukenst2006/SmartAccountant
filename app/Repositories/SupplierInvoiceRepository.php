<?php

namespace App\Repositories;

use App\Models\SupplierInvoice;
use App\Repositories\BaseRepository;

/**
 * Class SupplierInvoiceRepository
 * @package App\Repositories
 * @version July 26, 2020, 1:39 am UTC
*/

class SupplierInvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'SupplierID',
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
        return SupplierInvoice::class;
    }

    public function getInvoices()
    {
        SupplierInvoice::all();
    }
}
