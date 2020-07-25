<nav class="main-header navbar
    {{ config('adminlte.classes_topnav_nav', 'navbar-expand') }}
{{ config('adminlte.classes_topnav', 'navbar-white navbar-light') }}">

    {{-- Navbar left links --}}
    <ul class="navbar-nav">
        {{-- Left sidebar toggler link --}}
        @include('vendor.adminlte.partials.navbar.menu-item-left-sidebar-toggler')

        {{-- Configured left links --}}
        @each('vendor.adminlte.partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item')

        {{-- Custom left links --}}
        @yield('content_top_nav_left')
    </ul>

    {{-- Navbar right links --}}
        <ul class="navbar-nav case-info {{ (app()->getLocale() == "ar") ? 'mr-auto' :"ml-auto"}}">
        <div>
            <span class="ml-2">
            <a href="{{route('admin.settings.index')}}" class="d-inline-block text-danger py-2"><i class="fas fa-cogs"></i> <small>إعدادت البرنامج</small> </a>
        </span>
            <span class="ml-2">
           <a href="" class="d-inline-block text-info py-2"> <i class="fas fa-store"></i>  <small>{{auth()->user()->settings->AppName ?? 'متجر'}}</small> </a>
        </span>
            <span class="ml-2">
           <span href="" class="d-inline-block text-success py-2">   <small><i class="fas fa-circle"></i>    حالة الإشتراك </small> </span>
        </span>
        </div>
        {{-- Custom right links --}}
        @yield('content_top_nav_right')

        {{-- Configured right links --}}
        @each('vendor.adminlte.partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item')


        {{-- Languages Change Button --}}
        @if(config('adminlte.language_switch_button'))
            <ul class="navbar-nav">
                <a class="nav-link"
                   href="{{ config('adminlte.language_switch_href') .'/'. (app()->getLocale()== 'ar' ? 'en'  : 'ar'  )}}">
                    <i class="fa fa-2x fa-language"></i>
                    <span class="badge  badge-info navbar-badge">{{app()->getLocale()}}</span>
                </a>

            </ul>
        @endif

        {{-- User menu link --}}
        @if(Auth::user())
            @if(config('adminlte.usermenu_enabled'))
                @include('vendor.adminlte.partials.navbar.menu-item-dropdown-user-menu')
            @else
                @include('vendor.adminlte.partials.navbar.menu-item-logout-link')
            @endif
        @endif




        {{-- Right sidebar toggler link --}}
        @if(config('adminlte.right_sidebar'))
            @include('vendor.adminlte.partials.navbar.menu-item-right-sidebar-toggler')
        @endif
    </ul>

</nav>
