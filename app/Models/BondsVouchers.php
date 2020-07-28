<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BondsVouchers extends Model
{
    public $table = 'bonds_vouchers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


protected $with =['boundvoucheritems'];

    public $fillable = [
        'MarketplaceOwnerID',
        'ProductID',
        'ClientName',
        'Quantity',
        'BondDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'MarketplaceOwnerID'=>'integer',
        'ProductID' => 'integer',
        'ClientName' => 'string',
        'Quantity' => 'double',
        'BondDate' => 'date'
    ];

    /**
     * This relation return a product belongs to this bond voucher.
     *
     * @return HasMany
     */
    public function boundvoucheritems()
    {
        return $this->hasMany(BoundVoucherItem::class);
    }
}
