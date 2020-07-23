<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * @package App\Models
 * @version July 8, 2020, 8:43 am UTC
 *
 * @property string $Name
 * @property string $Address
 * @property integer $User_ID
 * @property string $Country
 * @property string $PhoneNumber
 * @property string $Description
 */
class Company extends Model
{

    public $table = 'companies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceOwnerID',
        'Name',
        'Address',
        'Country',
        'PhoneNumber',
        'Description',
        'IBAN',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'UserID'=>'integer',
        'Name' => 'string',
        'Address' => 'string',
        'Country' => 'string',
        'PhoneNumber' => 'string',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required',
        'Address' => 'required',
        'Country' => 'required',
        'PhoneNumber' => 'required',
        'Description' => 'required'
    ];


}
