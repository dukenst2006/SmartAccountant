<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $fillable = [
        'UserID',
        'MarketplaceOwnerID',
        'PhoneNumber',
    ];
    public function User(){
        return $this->belongsTo(User::class,'UserID','ID');
    }
}
