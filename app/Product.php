<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function sub_group()
    {
        return $this->belongsTo(Group::class, 'sub_group_id', 'id');
    }


    public function store()
    {
        return $this->belongsTo(MainStore::class, 'store_id', 'id');
    }

    public function branch()
    {
        return $this->belongsToMany(Brench::class, 'branch_product', 'product_id', 'branch_id')->withPivot('quantity');
    }


}
