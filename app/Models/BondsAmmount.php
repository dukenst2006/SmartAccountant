<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class BondsAmmount
 * @package App\Models
 * @version July 23, 2020, 12:48 am UTC
 *
 * @property MarketplaceOwner $marketplaceownerid
 * @property integer $MarketplaceOwnerID
 * @property string $client_name
 * @property number $ammount
 * @property string $ammount_date
 */
class BondsAmmount extends Model
{

    public $table = 'bond_amounts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceOwnerID',
        'client_name',
        'ammount',
        'ammount_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplaceOwnerID' => 'integer',
        'client_name' => 'string',
        'ammount' => 'float',
        'ammount_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'client_name' => 'required',
        'ammount' => 'required',
        'ammount_date' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function marketplaceownerid()
    {
        return $this->belongsTo(MarketplaceOwner::class, 'MarketplaceOwnerID');
    }
}
