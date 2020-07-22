<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class BondAmmount extends Model
{
    public $table = 'bond_ammounts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'client_name',
        'ammount_date',
        'ammount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'client_name' => 'string',
        'ammount_date' => 'date',
        'ammount' => 'double'
    ];
}
