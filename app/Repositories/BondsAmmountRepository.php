<?php

namespace App\Repositories;

use App\Models\BondsAmmount;
use App\Models\Warehouse;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BondsAmmountRepository
 * @package App\Repositories
 * @version July 23, 2020, 12:48 am UTC
*/

class BondsAmmountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplaceOwnerID',
        'client_name',
        'ammount',
        'ammount_date'
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
     * Create model record
     *
     * @param  array  $input
     *
     * @return Model
     */
    public function create($input)
    {
        $model = $this->model->newInstance($input);
        $model->MarketplaceOwnerID= $this->GetMyOwner();

        $model->save();

        return $model;
    }


    /**
     * Configure the Model
     **/
    public function model()
    {
        return BondsAmmount::class;
    }
}
