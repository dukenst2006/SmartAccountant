<?php

namespace App\Repositories;

use App\Models\Marketplace;
use App\Repositories\BaseRepository;

/**
 * Class MarketplaceRepository
 * @package App\Repositories
 * @version July 4, 2020, 12:00 am UTC
*/

class MarketplaceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplaceOwnerID',
        'Name',
        'Country',
        'City',
        'SupervisorPhoneNumber',
        'Address',
        'TaxNumber',
        'Email',
        'Latitude',
        'Longitude',
        'CompanyRegisterImage',
        'Logo'
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
        return Marketplace::class;
    }
}
