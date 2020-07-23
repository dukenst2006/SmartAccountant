<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class InvoiceItem
 * @package App\Models
 * @version July 13, 2020, 1:35 pm UTC
 *
 * @property Invoice $invoiceid
 * @property Product $productid
 * @property QuantityType $quantitytypeid
 * @property integer $InvoiceID
 * @property integer $ProductID
 * @property integer $QuantityTypeID
 * @property number $Quantity
 * @property number $UnitPrice
 * @property number $Total
 */
class InvoiceItem extends Model
{

    public $table = 'invoice_items';

    public $timestamps = false;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'InvoiceID',
        'ProductID',
        'QuantityTypeID',
        'Quantity',
        'UnitPrice',
        'Total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'InvoiceID' => 'integer',
        'ProductID' => 'integer',
        'QuantityTypeID' => 'integer',
        'Quantity' => 'float',
        'UnitPrice' => 'float',
        'Total' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'InvoiceID' => 'required',
        'ProductID' => 'required',
        'QuantityTypeID' => 'required',
        'Quantity' => 'required',
        'UnitPrice' => 'required',
        'Total' => 'required'
    ];
    protected $with =['product:id,name'];
    /**
     * @return BelongsTo
     **/
    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'InvoiceID');
    }

    /**
     * @return BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }

    /**
     * @return BelongsTo
     **/
    public function quantitytype()
    {
        return $this->belongsTo(QuantityType::class, 'QuantityTypeID');
    }
}
