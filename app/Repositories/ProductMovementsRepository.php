<?php

namespace App\Repositories;

use App\Models\ProductMovements;
use App\Repositories\BaseRepository;

/**
 * Class ProductMovementsRepository
 * @package App\Repositories
 * @version July 28, 2020, 7:49 am UTC
*/

class ProductMovementsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'UserID',
        'ProductID',
        'WarehouseID',
        'InventoryID',
        'Quantity',
        'MovementTypeID'
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
        return ProductMovements::class;
    }
}
