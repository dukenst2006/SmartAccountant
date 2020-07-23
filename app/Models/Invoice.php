<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Invoice
 * @package App\Models
 * @version July 13, 2020, 1:26 pm UTC
 *
 * @property Marketplace $MarketplaceID
 * @property PaymentType $paymenttypeid
 * @property Collection $invoiceItems
 * @property integer $MarketplaceID
 * @property integer $UserID
 * @property number $Total
 * @property number $Paid
 * @property number $Rest
 * @property integer $PaymentTypeID
 * @property boolean $IsRaw
 * @property string $RawFile
 * @property string $acc_number
 */
class Invoice extends Model
{

    public $table = 'invoices';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceID',
        'CustomerName',
        'UserID',
        'Total',
        'Paid',
        'Rest',
        'PaymentTypeID',
        'IsRaw',
        'RawFile',
        'acc_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplaceID' => 'integer',
        'UserID' => 'integer',
        'CustomerName' => 'string',
        'Total' => 'float',
        'Paid' => 'float',
        'Rest' => 'float',
        'PaymentTypeID' => 'integer',
        'IsRaw' => 'boolean',
        'RawFile' => 'string',
        'acc_number' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MarketplaceID' => 'required',
        // 'UserID' => 'required',
        'Total' => 'required',
        'Paid' => 'required',
        'Rest' => 'required',
        'PaymentTypeID' => 'required',
        'IsRaw' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function marketplace()
    {
        return $this->belongsTo(Marketplace::class, 'MarketplaceID');
    }

    /**
     * @return BelongsTo
     **/
    public function paymenttype()
    {
        return $this->belongsTo(PaymentType::class, 'PaymentTypeID');
    }

    /**
     * @return HasMany
     **/
    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class, 'InvoiceID');
    }
}
