<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class BoundVoucherItem
 * @package App\Models
 * @version July 26, 2020, 1:38 am UTC
 *
 * @property \App\Models\BondsVoucher $bondvouchersid
 * @property \App\Models\Product $productid
 * @property integer $BondVouchersID
 * @property integer $ProductID
 * @property number $Quantity
 */
class BoundVoucherItem extends Model
{

    public $table = 'bound_voucher_items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $timestamps = false;


    public $fillable = [
        'BondVouchersID',
        'ProductID',
        'Quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'BondVouchersID' => 'integer',
        'ProductID' => 'integer',
        'Quantity' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'BondVouchersID' => 'required',
        'ProductID' => 'required',
        'Quantity' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bondvouchersid()
    {
        return $this->belongsTo(\App\Models\BondsVoucher::class, 'BondVouchersID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productid()
    {
        return $this->belongsTo(\App\Models\Product::class, 'ProductID');
    }
}
