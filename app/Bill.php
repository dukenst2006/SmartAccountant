<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'pay_way',
        'paid',
        'status',
        'emp_id',
        'brench_id',
    ];
    public function branch()
    {
        return $this->belongsTo(Brench::class, 'brench_id', 'id');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'emp_id', 'id');
    }
    public function products(){
        return $this->belongsToMany(Product::class,'product_bills','bill_id','product_id');
    }

}
