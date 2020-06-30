<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainStore extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'store_id', 'id');
    }


    public static function MainStore()
    {
        return MainStore::all()->first();
    }
}
