<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'image',
        'nation',
        'job',
        'identity_number',
        'identity_img',
        'contract_img',
        'phone',
        'bank_account',
        'sex',
        'salary',
        'status',
        'brench_id',
    ];
    public function brench(){
        return $this->belongsTo(Brench::class,'brench_id','id');
    }
}
