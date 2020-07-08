<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class Supervisor
 * @package App\Models\Admin
 * @version July 6, 2020, 5:37 am UTC
 *
 * @property \App\Models\Admin\Marketplace $marketplaceid
 * @property \App\Models\Admin\User $userid
 * @property integer $UserID
 * @property integer $MarketplaceID
 * @property string $PhoneNumber
 */
class Supervisor extends Model
{

    public $table = 'supervisors';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


protected $with = ['user:id,Name,Email,Password','marketplace:id,Name'];


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
        'ID' => 'integer',
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
    public function Marketplace()
    {
        return $this->belongsTo(\App\Models\Admin\Marketplace::class, 'MarketplaceID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function User()
    {
        return $this->belongsTo(\App\Models\Admin\User::class, 'UserID');
    }
}
