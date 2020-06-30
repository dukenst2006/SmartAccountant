@if(config('adminlte.layout_topnav') or (isset($item['topnav']) && $item['topnav']))
  @include('vendor.adminlte.partials.menu-item-top-nav', $item)
@endif
