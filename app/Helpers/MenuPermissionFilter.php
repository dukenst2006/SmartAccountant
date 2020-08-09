<?php


namespace App\Helpers;

use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Spatie\Permission\Traits\HasRoles;


class MenuPermissionFilter implements FilterInterface
{


    public function transform($item)
    {
        // if (isset($item['role'])) {
        //     foreach ($item['role'] as $key)
        //    if( !auth()->user()->hasRole($key))
        //     $item['restricted'] = true;
        // }

        return $item;
    }
}


