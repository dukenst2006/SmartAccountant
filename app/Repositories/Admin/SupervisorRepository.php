<?php

namespace App\Repositories\Admin;

use App\Models\Supervisor;
use App\Repositories\BaseRepository;

/**
 * Class SupervisorRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 5:37 am UTC
*/

class SupervisorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'UserID',
        'MarketplaceOwnerID',
        'PhoneNumber'
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
        return Supervisor::class;
    }
}
