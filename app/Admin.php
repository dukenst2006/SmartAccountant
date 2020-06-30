<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function adminlte_image(){

        return 'https://rnmu.rw/wp-content/uploads/2019/10/man-300x300.png';
    }
    public function adminlte_desc(){
        return "a system user";
    }

}
