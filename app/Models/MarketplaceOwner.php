<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketplaceOwner extends Model
{
    public function User(){
        return $this->belongsTo(User::class,'UserID','ID');
    }
}
