<!-- Sidebar -->
<div class="sidebar">
    <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/img/logo.jpeg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{__('adminPanel.Const Tech')}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{request()->routeIs('admin.settings.index') ?'menu-open' : ''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            {{__('adminPanel.Main')}}
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a target="_blank" href="{{url('/')}}" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>{{__('adminPanel.Main Ui')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('admin.home')}}" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>{{__('dashboard.Statics')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.about.index')}}" class="nav-link {{request()->routeIs('admin.about.index') ?'active' : ''}}">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>
                            {{__('adminPanel.about')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.settings.index')}}" class="nav-link {{request()->routeIs('admin.settings.index') ?'active' : ''}}">
                        <i class="nav-icon fa fa-spin fa-cog"></i>
                        <p>
                            {{__('adminPanel.Settings')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.storage')}}" class="nav-link {{request()->routeIs('admin.storage') ?'active' : ''}}">
                        <i class="nav-icon fa fa-spin fa-cog"></i>
                        <p>
                            {{__('storage.title')}}
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bell"></i>
                        <p>
                            {{__('adminPanel.Notifications')}}
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p></p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            {{__('adminPanel.Admins Management')}}
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p></p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            {{__('adminPanel.Branches')}}
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.brenchs.create')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>{{__('branch.create')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.brenchs.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>{{__('branch.all')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('admin.human_r')}}" class="nav-link">
                        <i class="nav-icon fa fa-resistance"></i>
                        <p>
                            {{__('adminPanel.Human resources')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{request()->routeIs('admin.bills.index') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-money"></i>
                        <p>
                            {{__('adminPanel.Invoices')}}
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.bills.index')}}" class="nav-link {{request()->routeIs('admin.bills.index') ? 'active' : ''}}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>{{__("All")}}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-money"></i>
                        <p>
                            {{__('adminPanel.Expenses')}}
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.expenses.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>{{__('adminPanel.Expenses')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.expenses-categories.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>{{__('expenses.expenses_category')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.main-store.index')}}" class="nav-link {{request()->routeIs('admin.main-store.*') ? 'active' : ''}}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            {{__('Main store')}}
                            <i class="fa right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.groups.index')}}" class="nav-link {{request()->routeIs('admin.groups.*') ? 'active':''}}">
                        <i class="nav-icon fa fa-times-circle"></i>
                        <p>
                            {{__('groups.group_mange')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-money"></i>
                        <p>
                            {{__('adminPanel.Financial reports')}}
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p></p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-hdd-o"></i>
                        <p>
                            {{__('adminPanel.Backup')}}
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p></p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>
<!-- /.sidebar -->
