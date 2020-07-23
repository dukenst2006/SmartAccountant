<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeRepository
 * @package App\Repositories\Admin
 * @version July 6, 2020, 5:31 am UTC
*/

class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'UserID',
        'MarketplaceID',
        'MarketplaceOwnerID',
        'Nationality',
        'JobTitle',
        'NationalID',
        'PhoneNumber',
        'ProfileImage',
        'IdentityImage',
        'EmploymentContractImage',
        'IBAN',
        'Sex',
        'Salary'
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
        return Employee::class;
    }

    /**
     * Update model record for given id
     *
     * @param array $input
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function update($input, $id )
    {

        $query = $this->model->newQuery();
        $model = $query->findOrFail($id );
        $model->fill($input);
        $model->user->Name= $input['Name'];
        $model->user->save();
        $model->save();


        return $model;
    }

    public function create($input)
    {
     //User::create()
        $model = $this->model->newInstance($input);

        $model->save();

        return $model;
    }






}
