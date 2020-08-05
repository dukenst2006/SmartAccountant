<?php


namespace App\Helpers;

use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Spatie\Permission\Traits\HasRoles;


class MenuPermissionFilter implements FilterInterface
{


    public function transform($item)
    {
        if (isset($item['role']) && ! auth()->user()->hasRole($item['role'])   ) {
            $item['restricted'] = true;
        }

        return $item;
    }
}


