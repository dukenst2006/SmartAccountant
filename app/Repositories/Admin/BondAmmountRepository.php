<?php

namespace App\Repositories\Admin;

use App\BondAmmount;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BondsAmmountRepository
 * @package App\Repositories\Admin
 * @version July 22, 2020, 05:31 am UTC
*/

class BondAmmountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'client_name',
        'ammount_date',
        'ammount'
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
        return BondAmmount::class;
    }

    /**
     * Create Bond Ammount record
     *
     * @param array $inputs
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function createNewBondAmmount($inputs)
    {
        BondAmmount::create([
            'client_name' => $inputs['client_name'],
            'ammount_date' => $inputs['ammount_date'],
            'ammount' => $inputs['ammount']
        ]);

        return true;
    }
}
