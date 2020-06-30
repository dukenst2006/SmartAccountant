@inject('menuItemHelper', \JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper)

@if ($menuItemHelper->isSubmenu($item))

    {{-- Dropdown submenu --}}
    @include('vendor.adminlte.partials.navbar.dropdown-item-submenu')

@elseif ($menuItemHelper->isLink($item))

    {{-- Dropdown link --}}
    @include('vendor.adminlte.partials.navbar.dropdown-item-link')

@endif
