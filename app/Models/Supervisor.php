<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Supervisor
 * @package App\Models
 * @version July 6, 2020, 3:34 am UTC
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




    public $fillable = [
        'UserID',
        'MarketplaceOwnerID',
        'PhoneNumber'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'UserID' => 'integer',
        'MarketplaceOwnerID' => 'integer',
        'PhoneNumber' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'UserID' => 'required',
        'MarketplaceOwnerID' => 'required',
        'PhoneNumber' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function marketplaceownerid()
    {
        return $this->belongsTo(\App\Models\MarketplaceOwner::class, 'MarketplaceOwnerID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function userid()
    {
        return $this->belongsTo(\App\Models\User::class, 'UserID');
    }
}
