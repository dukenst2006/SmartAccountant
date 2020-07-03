<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemAdmin extends Model
{
    protected $fillable = [
        'UserID',
        'Phone',
        'SoftwareVersion',
        'SerialKey',
    ];
    public function User(){
        return $this->belongsTo(User::class,'UserID','ID');
    }
}
