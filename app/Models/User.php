<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class User
 * @package App\Models
 * @version July 8, 2020, 5:44 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $employees
 * @property \Illuminate\Database\Eloquent\Collection $marketplaceOwners
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property \Illuminate\Database\Eloquent\Collection $supervisors
 * @property \Illuminate\Database\Eloquent\Collection $systemAdmins
 * @property string $Name
 * @property string $Email
 * @property string|\Carbon\Carbon $EmailVerifiedAt
 * @property string $Password
 * @property string $remember_token
 */
class User extends  Authenticatable
{
    use Notifiable;
    use HasRoles;
    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'Name',
        'Email',
        'Password',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Email' => 'string',
        'Password' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => ['required', 'string', 'max:255'],
        'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8'],
    ];


    public function Employee()
    {
        return $this->hasOne(Employee::class,'UserID','ID');
    }

    public function adminlte_image(){
        return "https://rnmu.rw/wp-content/uploads/2019/10/man-300x300.png";
    }
    public function adminlte_desc(){
        return "a system user";
        return "مدير مجموعه اسواق العثيم";
    }










}
