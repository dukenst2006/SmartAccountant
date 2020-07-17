<?php

namespace App\Repositories;

use App\Models\Stock;
use App\Repositories\BaseRepository;

/**
 * Class StockRepository
 * @package App\Repositories
 * @version July 10, 2020, 2:59 am UTC
*/

class StockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplacesOwnerID',
        'MarketplaceID'
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
        return Stock::class;
    }
}
