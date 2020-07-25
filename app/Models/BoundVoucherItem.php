<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class BoundVoucherItem
 * @package App\Models
 * @version July 25, 2020, 11:18 am UTC
 *
 * @property BondsVouchers $bondvoucher
 * @property Product $product
 * @property integer $BondVoucher
 * @property integer $Product
 * @property number $Quantity
 */
class BoundVoucherItem extends Model
{

    public $table = 'bound_voucher_items';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




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
     * @return BelongsTo
     **/
    public function bondvoucher()
    {
        return $this->belongsTo(BondsVoucher::class, 'BondVouchersID');
    }

    /**
     * @return BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }
}
