@inject('menuItemHelper', \JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper)

@if ($menuItemHelper->isSearchBar($item))

    {{-- Search form --}}
    @include('vendor.adminlte.partials.navbar.menu-item-search-form')

@elseif ($menuItemHelper->isSubmenu($item))

    {{-- Dropdown menu --}}
    @include('vendor.adminlte.partials.navbar.menu-item-dropdown-menu')

@elseif ($menuItemHelper->isLink($item))

    {{-- Link --}}
    @include('vendor.adminlte.partials.navbar.menu-item-link')

@endif
