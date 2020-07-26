<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class SupplierInvoice
 * @package App\Models
 * @version July 26, 2020, 1:39 am UTC
 *
 * @property number $Amount
 * @property number $Paid
 * @property number $Rest
 * @property string $note
 */
class SupplierInvoice extends Model
{

    public $table = 'supplier_invoices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'MarketplaceOwnerID',
        'SupplierID',
        'Amount',
        'Paid',
        'Rest',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'MarketplaceOwnerID' => 'integer',
        'SupplierID' => 'integer',
        'Amount' => 'float',
        'Paid' => 'float',
        'Rest' => 'float',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'SupplierID' => 'required',
        'Amount' => 'required',
        'Paid' => 'required',
        'Rest' => 'required',
        'note' => 'required'
    ];

    /**
     * @return BelongsTo
     **/
    public function marketplaceOwner()
    {
        return $this->belongsTo(MarketplaceOwner::class, 'MarketplaceOwnerID');
    }

    /**
     * @return BelongsTo
     **/
    public function supplier()
    {
        return $this->belongsTo(\App\Models\Supplier::class, 'SupplierID');
    }
}
