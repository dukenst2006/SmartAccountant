<?php

namespace App\Repositories;

use App\Models\InvoiceItem;
use App\Repositories\BaseRepository;

/**
 * Class InvoiceItemRepository
 * @package App\Repositories
 * @version July 13, 2020, 1:35 pm UTC
*/

class InvoiceItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'InvoiceID',
        'ProductID',
        'QuantityTypeID',
        'Quantity',
        'UnitPrice',
        'Total'
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
        return InvoiceItem::class;
    }
}
