<?php

namespace App\Repositories\Admin;

use App\Models\Marketplace;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MarketplaceRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 5:37 am UTC
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
        'SafeBalance',
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


    /**
     * Create model record
     *
     * @param array $input
     *
     * @return Model
     */
    public function create($input)
    {
        $model = $this->model->newInstance($input);
        $model->MarketplaceOwnerID = Auth()->user()->id;
        $model->save();
        return $model;
    }







}
