<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * Class Supervisor
 * @package App\Models
 * @version July 6, 2020, 5:37 am UTC
 *
 * @property MarketplaceOwner $marketplaceowner
 * @property User $userid
 * @property integer $UserID
 * @property integer $MarketplaceOwnerID
 * @property string $PhoneNumber
 */
class Supervisor extends Model
{

    public $table = 'supervisors';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $with = ['user:id,Name,Email','marketplaceowner:id'];

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
        'id' => 'integer',
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

        'PhoneNumber' => 'required'
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
}
