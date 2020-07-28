<?php

namespace App\Repositories;

use App\Models\EmployeeSalaryInfo;
use App\Repositories\BaseRepository;

/**
 * Class EmployeeSalaryInfoRepository
 * @package App\Repositories
 * @version July 28, 2020, 8:14 am UTC
*/

class EmployeeSalaryInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'EmployeeID',
        'Allowances',
        'Deductions',
        'Description'
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
        return EmployeeSalaryInfo::class;
    }
}
