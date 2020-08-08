<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * @var User $admin
         */
     $admin=User::create([
            'Name' => "Admin",
            'Email' => "Admin@syb.com",
            'Password' => Hash::make("123456789"),
        ]);
    $admin->assignRole('SystemAdmin');
    }
}
