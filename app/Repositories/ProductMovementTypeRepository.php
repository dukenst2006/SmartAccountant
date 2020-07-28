<?php

namespace App\Repositories;

use App\Models\ProductMovementType;
use App\Repositories\BaseRepository;

/**
 * Class ProductMovementTypeRepository
 * @package App\Repositories
 * @version July 28, 2020, 7:49 am UTC
*/

class ProductMovementTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Description'
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
        return ProductMovementType::class;
    }
}
