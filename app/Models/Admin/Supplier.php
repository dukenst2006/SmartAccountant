<?php

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 * @package App\Models\Admin
 * @version July 8, 2020, 9:56 am UTC
 *
 * @property \App\Models\Admin\MarketplaceOwner $marketplaceownerid
 * @property integer $MarketplaceOwnerID
 * @property string $Name
 * @property string $CompanyID
 * @property string $PhoneNumber
 */
class Supplier extends Model
{

    public $table = 'suppliers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $with = ['MarketplaceOwner:id', 'Company:id,Name'];


    public $fillable = [
        'MarketplaceOwnerID',
        'Name',
        'CompanyID',
        'PhoneNumber',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplaceOwnerID' => 'integer',
        'Name' => 'string',
        'CompanyID' => 'string',
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
        'CompanyID' => 'required',
        'PhoneNumber' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplaceowner()
    {
        return $this->belongsTo(\App\Models\MarketplaceOwner::class, 'MarketplaceOwnerID');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class, 'CompanyID');
    }

}
