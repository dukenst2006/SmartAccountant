<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Employee
 * @package App\Models
 * @version July 6, 2020, 5:31 am UTC
 *
 * @property Marketplace $marketplaceid
 * @property User $User
 * @property Collection $employeeSalaryInfos
 * @property integer $UserID
 * @property integer $MarketplaceID
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

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplaceID' => 'required',
        'Nationality' => 'required',
        'JobTitle' => 'required',
        'NationalID' => 'required',
        'PhoneNumber' => 'required',
//        'ProfileImage' => 'required',
//        'IdentityImage' => 'required',
//        'EmploymentContractImage' => 'required',
        'IBAN' => 'required',
        'Sex' => 'required',
        'Salary' => 'required'
    ];
    public $table = 'employees';
    public $fillable = [
        'UserID',
        'MarketplaceID',
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
    protected $with = ['user:id,Name,Email,Password', 'marketplace:id,Name'];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'UserID' => 'integer',
        'MarketplaceID' => 'integer',
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
     * @return BelongsTo
     **/
    public function marketplace()
    {
        return $this->belongsTo(Marketplace::class, 'MarketPlaceID');
    }

    /**
     * @return BelongsTo
     **/
    public function User()
    {
        return $this->belongsTo(User::class, 'UserID');
    }


    /**
     * @return HasMany
     **/
    public function employeeSalaryInfos()
    {
        return $this->hasMany(EmployeeSalaryInfo::class, 'EmployeeID');
    }
}
