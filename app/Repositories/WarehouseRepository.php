<?php

namespace App\Repositories;

use App\Models\Warehouse;
use App\Repositories\BaseRepository;

/**
 * Class WarehouseRepository
 * @package App\Repositories
 * @version July 10, 2020, 9:47 pm UTC
*/

class WarehouseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplaceOwnerID'
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
        return Warehouse::class;
    }
}
