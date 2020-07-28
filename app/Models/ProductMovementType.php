<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ProductMovementType
 * @package App\Models
 * @version July 28, 2020, 7:49 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $productMovements
 * @property string $Description
 */
class ProductMovementType extends Model
{

    public $table = 'product_movement_types';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Description' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productMovements()
    {
        return $this->hasMany(\App\Models\ProductMovement::class, 'MovementTypeID');
    }
}
