<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class BondsVouchers extends Model
{
    public $table = 'bonds_vouchers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




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
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }
}
