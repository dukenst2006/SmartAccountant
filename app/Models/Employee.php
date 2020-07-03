<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable= [
        'UserID',
        'MarketplaceID',
        'MarketplaceOwnerID',
        'Nationality',
        'JobTitle',
        'NationalID',
        'PhoneNumber',
        'ProfileImage',
        'IdentityImage',
        'EmploymentContractImage',
        'IBAN',
        'Sex',
        'Salary',
    ];
    public function User(){
        return $this->belongsTo(User::class,'UserID','ID');
    }
    public function MarketPlace(){
        return $this->belongsTo(Marketplace::class,'MarketplaceID','ID');
    }
}
