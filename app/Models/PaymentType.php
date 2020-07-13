<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $guarded =[];
    public function Invoices(){
        return $this->hasMany(Invoice::class,'PaymentTypeID','ID');
    }
}
