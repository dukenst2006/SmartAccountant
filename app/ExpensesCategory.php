<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpensesCategory extends Model
{
    protected $guarded = [];

    public function subCats()
    {
        return $this->hasMany(ExpensesCategory::class, 'cat_id', 'id');
    }

    public function cat()
    {
        return $this->belongsTo(ExpensesCategory::class, 'cat_id', 'id');
    }
}
