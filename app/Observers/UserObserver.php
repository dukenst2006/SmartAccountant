<?php

namespace App\Observers;

use App\Models\Settings;
use App\Models\User;

class UserObserver
{



    /**
     * Handle the marketplace "creating" event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {


        $settings = new Settings();
        $settings->UserID= $user->id;
        $settings->save();


    }




}
