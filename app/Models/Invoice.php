<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function PaymentType(){
        return $this->belongsTo(PaymentType::class,'PaymentTypeID','ID');
    }
}
