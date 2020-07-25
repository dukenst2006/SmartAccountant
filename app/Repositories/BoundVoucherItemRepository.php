<?php

namespace App\Repositories;

use App\Models\BoundVoucherItem;
use App\Repositories\BaseRepository;

/**
 * Class BoundVoucherItemRepository
 * @package App\Repositories
 * @version July 25, 2020, 11:18 am UTC
*/

class BoundVoucherItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'BondVouchersID',
        'ProductID',
        'Quantity'
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
        return BoundVoucherItem::class;
    }
}
