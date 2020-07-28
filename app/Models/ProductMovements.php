<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ProductMovements
 * @package App\Models
 * @version July 28, 2020, 7:49 am UTC
 *
 * @property \App\Models\Inventory $inventoryid
 * @property \App\Models\ProductMovementType $movementtypeid
 * @property \App\Models\Product $productid
 * @property \App\Models\User $userid
 * @property \App\Models\Warehouse $warehouseid
 * @property integer $UserID
 * @property integer $ProductID
 * @property integer $WarehouseID
 * @property integer $InventoryID
 * @property integer $Quantity
 * @property integer $MovementTypeID
 */
class ProductMovements extends Model
{

    public $table = 'product_movements';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'UserID',
        'ProductID',
        'WarehouseID',
        'InventoryID',
        'Quantity',
        'MovementTypeID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'UserID' => 'integer',
        'ProductID' => 'integer',
        'WarehouseID' => 'integer',
        'InventoryID' => 'integer',
        'Quantity' => 'integer',
        'MovementTypeID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'UserID' => 'required',
        'ProductID' => 'required',
        'WarehouseID' => 'required',
        'InventoryID' => 'required',
        'Quantity' => 'required',
        'MovementTypeID' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function inventoryid()
    {
        return $this->belongsTo(\App\Models\Inventory::class, 'InventoryID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movementtypeid()
    {
        return $this->belongsTo(\App\Models\ProductMovementType::class, 'MovementTypeID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productid()
    {
        return $this->belongsTo(\App\Models\Product::class, 'ProductID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function userid()
    {
        return $this->belongsTo(\App\Models\User::class, 'UserID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function warehouseid()
    {
        return $this->belongsTo(\App\Models\Warehouse::class, 'WarehouseID');
    }
}
