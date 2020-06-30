<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $guarded = [];

    public function cat()
    {
        return $this->belongsTo(ExpensesCategory::class, 'cat_id', 'id');
    }

    public function subCat()
    {
        return $this->belongsTo(ExpensesCategory::class, 'sub_cat_id', 'id');
    }
}
