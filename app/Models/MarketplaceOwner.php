<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class MarketplaceOwner
 * @package App\Models
 * @version July 17, 2020, 6:18 am UTC
 *
 * @property User $user
 * @property Collection $employees
 * @property Collection $marketplaces
 * @property Collection $supervisors
 * @property Collection $suppliers
 * @property Collection $warehouses
 * @property integer $UserID
 * @property string $PhoneNumber
 */
class MarketplaceOwner extends Model
{

    public $table = 'marketplace_owners';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




        public $fillable = [
        'UserID',
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
        'PhoneNumber' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'UserID' => 'required',
        'PhoneNumber' => 'required'
    ];

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
    public function employees()
    {
        return $this->hasMany(Employee::class, 'MarketplaceOwnerID');
    }

    /**
     * @return HasMany
     **/
    public function marketplaces()
    {
        return $this->hasMany(Marketplace::class, 'MarketplaceOwnerID');
    }

    /**
     * @return HasMany
     **/
    public function supervisors()
    {
        return $this->hasMany(Supervisor::class, 'MarketplaceOwnerID');
    }

    /**
     * @return HasMany
     **/
    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'MarketplaceOwnerID');
    }

    /**
     * @return HasOne
     **/
    public function warehouse()
    {
        return $this->hasOne(Warehouse::class, 'MarketplaceOwnerID');
    }
}
