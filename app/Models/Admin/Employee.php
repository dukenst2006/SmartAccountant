<?php

namespace App\Models\Admin;

use App\Models\Marketplace;
use Eloquent as Model;

/**
 * Class Employee
 * @package App\Models\Admin
 * @version July 6, 2020, 5:31 am UTC
 *
 * @property \App\Models\Admin\Marketplace $marketplaceid
 * @property \App\Models\Admin\MarketplaceOwner $marketplaceownerid
 * @property \App\Models\Admin\User $User
 * @property \Illuminate\Database\Eloquent\Collection $employeeSalaryInfos
 * @property integer $UserID
 * @property integer $MarketplaceID
 * @property integer $MarketplaceOwnerID
 * @property string $Nationality
 * @property string $JobTitle
 * @property string $NationalID
 * @property string $PhoneNumber
 * @property string $ProfileImage
 * @property string $IdentityImage
 * @property string $EmploymentContractImage
 * @property string $IBAN
 * @property string $Sex
 * @property number $Salary
 */
class Employee extends Model
{

    public $table = 'employees';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $with = ['user:id,Name','marketplace:id,name'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'UserID' => 'integer',
        'MarketplaceID' => 'integer',
        'MarketplaceOwnerID' => 'integer',
        'Nationality' => 'string',
        'JobTitle' => 'string',
        'NationalID' => 'string',
        'PhoneNumber' => 'string',
        'ProfileImage' => 'string',
        'IdentityImage' => 'string',
        'EmploymentContractImage' => 'string',
        'IBAN' => 'string',
        'Sex' => 'string',
        'Salary' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplaceID' => 'required',
        'MarketplaceOwnerID' => 'required',
        'Nationality' => 'required',
        'JobTitle' => 'required',
        'NationalID' => 'required',
        'PhoneNumber' => 'required',
        'ProfileImage' => 'required',
        'IdentityImage' => 'required',
        'EmploymentContractImage' => 'required',
        'IBAN' => 'required',
        'Sex' => 'required',
        'Salary' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function Marketplace()
    {
        return $this->belongsTo(\App\Models\Admin\Marketplace::class, 'MarketplaceID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplaceownerid()
    {
        return $this->belongsTo(\App\Models\Admin\MarketplaceOwner::class, 'MarketplaceOwnerID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function User()
    {
        return $this->belongsTo(\App\Models\Admin\User::class, 'UserID');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employeeSalaryInfos()
    {
        return $this->hasMany(\App\Models\Admin\EmployeeSalaryInfo::class, 'EmployeeID');
    }
}
