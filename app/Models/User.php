<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Musonza\Chat\Traits\Messageable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use Messageable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name', 'Email', 'Password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
protected $with=['settings'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image(){

        return "https://rnmu.rw/wp-content/uploads/2019/10/man-300x300.png";
    }
    public function adminlte_desc(){
        return "مدير مجموعه اسواق العثيم";
    }




public function Employee()
{
    return $this->hasOne(Employee::class,'UserID','id');
}


public function settings()
{
    return $this->hasOne(Settings::class,'UserID','id');
}




}
