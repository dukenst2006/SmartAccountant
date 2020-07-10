<?php

namespace App\Repositories\Admin;

use App\Models\Supplier;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierRepository
 * @package App\Repositories\Admin
 * @version July 8, 2020, 9:56 am UTC
*/

class SupplierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'MarketplaceOwnerID',
        'Name',
        'Company',
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





    /**
     * Configure the Model
     **/
    public function model()
    {
        return Supplier::class;
    }
}
