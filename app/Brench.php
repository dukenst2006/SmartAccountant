<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brench extends Model
{
    protected $fillable = [
        'name',
        'country',
        'city',
        'address',
        'manger_phone',
        'tax_number',
        'tax_image',
        'email',
        'long',
        'lat',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'brench_id', 'id');
    }

    public function bills()
    {
        return $this->hasMany(Bill::class, 'brench_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'branch_product', 'branch_id', 'product_id')->withPivot('quantity');
    }
}
