<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Supervisor
 * @package App\Models\Admin
 * @version July 6, 2020, 5:37 am UTC
 *
 * @property \App\Models\MarketplaceOwner $marketplaceownerid
 * @property \App\Models\User $userid
 * @property integer $UserID
 * @property integer $MarketplaceOwnerID
 * @property string $PhoneNumber
 */
class Supervisor extends Model
{

    public $table = 'supervisors';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $with = ['user:id,Name,Email,Password','marketplace:id,MarketplaceOwnerID,Name'];

    public $fillable = [
        'UserID',
        'MarketplaceID',
        'PhoneNumber'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'UserID' => 'integer',
        'MarketplaceID' => 'integer',
        'PhoneNumber' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'UserID' => 'required',
        'MarketplaceID' => 'required',
        'PhoneNumber' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplace()
    {
        return $this->belongsTo(\App\Models\Marketplace::class, 'MarketplacesID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'UserID');
    }
}
