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
 * @property MarketplaceOwner $marketplace
 * @property User $User
 * @property Collection $employeeSalaryInfos
 * @property integer $UserID
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

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
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
    protected $with = ['user:id,Name,Email,Password', 'marketplaceowner:id'];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'UserID' => 'integer',
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
     * @return BelongsTo
     **/
    public function marketplaceowner()
    {
        return $this->belongsTo(MarketplaceOwner::class, 'MarketplaceOwnerID');
    }

    /**
     * @return BelongsTo
     **/
    public function user()
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
