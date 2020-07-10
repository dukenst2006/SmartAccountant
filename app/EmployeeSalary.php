<?php

namespace App;

use App\Models\Marketplace;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
    protected $fillable = ['Name','File','IsPDF','MarketPlaceID'];
    public function marketplace(){
        return $this->belongsTo(Marketplace::class,'MarketPlaceID','ID');
    }
}
