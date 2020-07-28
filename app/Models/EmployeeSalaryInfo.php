<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class EmployeeSalaryInfo
 * @package App\Models
 * @version July 28, 2020, 8:14 am UTC
 *
 * @property \App\Models\Employee $employeeid
 * @property integer $EmployeeID
 * @property number $Allowances
 * @property number $Deductions
 * @property string $Description
 */
class EmployeeSalaryInfo extends Model
{

    public $table = 'employee_salary_infos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'EmployeeID',
        'Allowances',
        'Deductions',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'EmployeeID' => 'integer',
        'Allowances' => 'float',
        'Deductions' => 'float',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'EmployeeID' => 'required',
        'Allowances' => 'required',
        'Deductions' => 'required',
        'Description' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'EmployeeID');
    }
}
