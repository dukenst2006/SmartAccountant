<?php

namespace App\Repositories;

use App\Models\Inventory;
use App\Repositories\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Class InventoryRepository
 * @package App\Repositories
 * @version July 10, 2020, 9:46 pm UTC
*/

class InventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplacesID',
        'WarehouseID'
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
     * Paginate records for scaffold.
     *
     * @param int $perPage
     * @param array $columns
     * @return LengthAwarePaginator
     */
    public function paginate($perPage, $columns = ['*'])
    {
        $query = $this->allQuery()->withCount(['products'])->with(['marketplace:id,Name']);

        return $query->paginate($perPage, $columns);
    }


    /**
     * Configure the Model
     **/
    public function model()
    {
        return Inventory::class;
    }
}
