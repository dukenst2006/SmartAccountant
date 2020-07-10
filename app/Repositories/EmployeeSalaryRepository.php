<?php


namespace App\Repositories;


use App\EmployeeSalary;

class EmployeeSalaryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'IsPDF',
        'File',
        'MarketPlaceID',
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
        return EmployeeSalary::class;
    }

}
