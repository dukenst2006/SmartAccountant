<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Employee;
use App\Repositories\BaseRepository;

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
}
