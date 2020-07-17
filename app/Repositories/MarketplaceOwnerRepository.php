<?php

namespace App\Repositories;

use App\Models\MarketplaceOwner;
use App\Repositories\BaseRepository;

/**
 * Class MarketplaceOwnerRepository
 * @package App\Repositories
 * @version July 17, 2020, 6:18 am UTC
*/

class MarketplaceOwnerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'UserID',
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
        return MarketplaceOwner::class;
    }
}
