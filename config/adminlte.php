<?php

return [/*
|--------------------------------------------------------------------------
| Title
|--------------------------------------------------------------------------
|
| Here you can change the default title of your admin panel.
|
||
*/
    'title' => 'Smart Accountant v1',
    'title_prefix' => '',
    'title_postfix' => '',/*
|--------------------------------------------------------------------------
| Favicon
|--------------------------------------------------------------------------
|
| Here you can activate the favicon.
|
||
*/
    'use_ico_only' => true,
    'use_full_favicon' => false,/*
|--------------------------------------------------------------------------
| Logo
|--------------------------------------------------------------------------
|
| Here you can change the logo of your admin panel.
|
||
*/
    'logo' => ' نظام '.'<b>المحاسب الذكي</b> ',
    'logo_img' => 'css/logo.png',
    'logo_img_class' => 'brand-image img-fluid',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Smart Accountant Logo',/*
|--------------------------------------------------------------------------
| User Menu
|--------------------------------------------------------------------------
|
| Here you can activate and change the user menu.
|
||
*/

    'language_switch_button' => true,
    'language_switch_href' => '/lang',
    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => false,

    /*
|--------------------------------------------------------------------------
| Layout
|--------------------------------------------------------------------------
|
| Here we change the layout of your admin panel.
|
||
*/
    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,/*
|--------------------------------------------------------------------------
| Authentication Views Classes
|--------------------------------------------------------------------------
|
| Here you can change the look and behavior of the authentication views.
|
||
*/
    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',/*
|--------------------------------------------------------------------------
| Admin Panel Classes
|--------------------------------------------------------------------------
|
| Here you can change the look and behavior of the admin panel.
|
||
*/
    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primarysk elevation-5',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand-md',
    'classes_topnav_container' => 'container',/*
|--------------------------------------------------------------------------
| Sidebar
|--------------------------------------------------------------------------
|
| Here we can modify the sidebar of the admin panel.
|
||
*/
    'sidebar_mini' => true,
    'sidebar_collapse' => true,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 200,
    'sidebar_theme' => 'light',
    /*
|--------------------------------------------------------------------------
| Control Sidebar (Right Sidebar)
|--------------------------------------------------------------------------
|
| Here we can modify the right sidebar aka control sidebar of the admin panel.
|
||
*/
    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => false,
    'right_sidebar_push' => false,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',/*
|--------------------------------------------------------------------------
| URLs
|--------------------------------------------------------------------------
|
| Here we can modify the url settings of the admin panel.
|
||
*/
    'use_route_url' => false, 'dashboard_url' => 'home', 'logout_url' => 'logout', 'login_url' => 'login',
    'register_url' => 'register', 'password_reset_url' => 'password/reset', 'password_email_url' => 'password/email',
    'profile_url' => false,/*
|--------------------------------------------------------------------------
| Laravel Mix
|--------------------------------------------------------------------------
|
| Here we can enable the Laravel Mi x option for the admin panel.
|
||
*/
    'enabled_laravel_mix' => true,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',/*
|--------------------------------------------------------------------------
| Menu Items
|--------------------------------------------------------------------------
|
| Here we can modify the sidebar/top navigation of the admin panel.
|
||
*/
    'menu' => [
        [
            'text' => 'SEARCH',
            'search' => true,
            'topnav' => true,
        ],

        ['header' => 'DashboardHeader'],

        [
            'text' => 'Main',
            'icon' => 'fas fa-fw fa-tachometer-alt',
            'route' => 'admin.Home',
        ],
        [
            'text' => 'about',
            'route' => 'admin.About',
            'icon' => 'fas fa-fw fa-code-branch',
            'icon_color' => 'dark',
        ],
        [
            'text' => 'Settings',
            'icon' => 'fas fa fa-cogs',
            'submenu' => [
                [
                    'text' => 'GeneralSettings',
                    'route' => 'admin.settings.index',
                    'icon' => 'fas fa-fw fa-cog',
                ],
            ],
        ],
        [
            'text' => 'Notifications',
            'icon' => 'fas fa fa-bell',

            'icon_color' => 'yellow',
            'label' => '41',
            'label_color' => 'danger',
        ],

        ['header' => 'HumanResources'],

        [
            'text' => 'Supervisors',
            'icon' => 'fas fa fa-user-tie',
            'submenu' => [
                [
                    'text' => 'create',
                    'route' => 'admin.supervisors.create',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],
                [
                    'text' => 'all',
                    'route' => 'admin.supervisors.index',
                    'icon' => 'fas fa-fw fa-layer-group',
                ],
            ],

        ],

        [
            'text' => 'Employee',
            'icon' => 'fas fa fa-users',
            'submenu' => [
                [
                    'text' => 'create',
                    'route' => 'admin.employees.create',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],
                [
                    'text' => 'all',
                    'route' => 'admin.employees.index',
                    'icon' => 'fas fa-fw fa-layer-group',
                ],
                [
                    'text' => 'EmployeesSalaries',
                    'route'=> 'admin.EmployeeSalary.index',
                    'icon' => 'fas fa-fw fa-coins',
                ],
            ],
        ],




        [
            'text' => 'AttendingAndLeaving',
            'icon' => 'fas fa fa-exchange-alt',
            'submenu' => [
                [
                    'text' => 'create',
                    'route' => 'admin.employees.create',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],
                [
                    'text' => 'all',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-layer-group',
                ],

            ],
        ],

        [
            'text' => 'Suppliers',
            'icon' => 'fas fa fa-people-carry',
            'submenu' => [

                [
                    'text' => 'create',
                    'route' => 'admin.suppliers.create',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],
                [
                    'text' => 'all',
                    'route' => 'admin.suppliers.index',
                    'icon' => 'fas fa-fw fa-layer-group',
                ],

                [
                    'text' => 'SuppliersInvoices',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-file-invoice-dollar',
                    'submenu' => [

                        [
                            'text' => 'create',
                            'route' => 'admin.supplier-invoice.create',
                            'icon' => 'fas fa-fw fa-plus-circle',
                        ],
                        [
                            'text' => 'all',
                            'route' => 'admin.supplier-invoice.index',
                            'icon' => 'fas fa-fw fa-layer-group',
                        ]
                    ],

                ],





                [
                    'text' => 'Companies',
                    'icon' => 'fas fa fa-city',
                    'submenu' => [

                        [
                            'text' => 'create',
                            'route' => 'admin.companies.create',
                            'icon' => 'fas fa-fw fa-plus-circle',
                        ],
                        [
                            'text' => 'all',
                            'route' => 'admin.companies.index',
                            'icon' => 'fas fa-fw fa-layer-group',
                        ],
                    ],
                ],





            ],



        ],

        [

            'text' => 'messages',
            'icon' => 'fas fa fa-comments',
            'route'=>'admin.chat',
            'icon_color' => 'green',

        ],



        ['header' => 'PublicAdministration'],
        [
            'text' => 'Marketplaces',
            'icon' => 'fas fa fa-store',
            'icon_color' => 'danger',
            'submenu' => [
                [
                    'text' => 'create',
                    'route' => 'admin.marketplaces.create',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],
                [
                    'text' => 'all',
                    'route' => 'admin.marketplaces.index',
                    'icon' => 'fas fa-fw fa-layer-group',
                ],
            ],
        ],


        [
            'text' => 'Warehouses',
            'icon' => 'fas fa-fw fa-warehouse',
            'url' => 's',
            'icon_color' => 'primary',
            'submenu' => [
                [
                    'text' => 'Warehouse',
                    'route' => 'admin.warehouses.index',
                    'icon' => 'fas fa-fw fa-synagogue',
                ],
                [
                    'text' => 'Inventories',
                    'route' => 'admin.inventories.index',
                    'icon' => 'fas fa-fw fa-th-large',
                ],
            ],

        ],


        [
            'text' => 'Products',
            'icon' => 'fas fa fa-cube',
            'submenu' => [
                [
                    'text' => 'create',
                    'route' => 'admin.products.create',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],[
                    'text' => 'all',
                    'route' => 'admin.ProductTableView',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],

            ],
        ],

        [
            'text' => 'Categories',
            'icon' => 'fas fa-fw fa-sitemap',
            'submenu' => [
                [
                    'text' => 'MainCategories',
                    'route' => 'admin.productCategories.index',
                    'icon' => 'fas fa-window-minimize',
                ],
                [
                    'text' => 'SubCategories',
                    'route' => 'admin.productSubCategories.index',
                    'icon' => 'fa fa-bars',
                ],
            ],
        ],


        ['header' => 'FinancialManagement'],

        [
            'text' => 'Treasury',
            'icon' => 'fas fa-fw fa-donate',
            'icon_color' => 'orange',
            'submenu' => [
                [
                    'text' => 'BondVoucher',
                        'route' => 'admin.bondsvoucher.create',
                    'icon' => 'fas fa-truck-loading',
                ],

                [
                    'text' => 'Treasury',
                    'route' => 'admin.treasure',
                    'icon' => 'fas fa-fw fa-donate',
                    'icon_color' => 'green',
                ],
            ],

        ],



        [
            'text' => 'Safe',
            'route' => 'admin.safe',
            'icon' => 'fas fa-fw fa-cash-register',
            'icon_color' => 'green',
        ],

        [
            'text' => 'Invoices',
            'url' => '#',
            'icon' => 'fas fa-fw fa-file-invoice-dollar',
            'submenu' => [
                [
                    'text' => 'SaleInvoices',
                    'route' => 'admin.invoice.createsale',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],
                [
                    'text' => 'RawInvoices',
                    'route' => 'admin.invoice.createraw',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],
                [
                    'text' => 'AllSaleInvoices',
                    'route' => 'admin.invoice.all',
                    'icon' => 'fas fa-fw fa-layer-group',
                ],

                [
                    'text' => 'AllRawInvoices',
                    'route' => 'admin.invoice.invoicerawall',
                    'icon' => 'fas fa-fw fa-layer-group',
                ]

            ],
        ],


        [
            'text' => 'Expenses',
            'url' => '#',
            'icon' => 'fas fa-fw fa-money-bill-alt',
            'submenu' => [
                [
                    'text' => 'BondAmount',
                    'route' => 'admin.bondsammout.create',
                    'icon' => 'fa fa-donate',
                ],

                [
                    'text' => 'create',
                    'route' => 'admin.expenses.create',
                    'icon' => 'fas fa-fw fa-plus-circle',
                ],

                [
                    'text' => 'all',
                    'route' => 'admin.expenses.index',
                    'icon' => 'fas fa-fw fa-cubes',

                ],


                [
                    'text' => 'ExpensesCategories',
                    'icon' => 'fas fa fa-city',
                    'submenu' => [

                        [
                            'text' => 'ExpensesCategory',
                            'route' => 'admin.expensesCategories.index',
                            'icon' => 'fas fa-window-minimize',
                        ],
                        [
                            'text' => 'ExpensesSubCategory',
                            'route' => 'admin.expensesSubCategories.index',
                            'icon' => 'fa fa-bars',
                        ],
                    ],
                ]




            ]
        ],


        ['header' => 'ReportsAndStatistics'],
        [
            'text' => 'Reports',
            'url' => '#',
            'icon' => 'fas fa fa-chart-pie',
            'submenu' => [
                [
                    'text' => 'ProductReport',
                    'route'=>'admin.productreport',
                    'icon' => 'fas fa-fw fa-cubes',
                ],

                [
                    'text' => 'MarketplacesReport',
                    'route'=>'admin.marketplacesreport',
                    'icon' => 'fas fa-fw fa-cubes',
                ],

                [
                    'text' => 'EmployeesReport',
                    'route'=>'admin.employeesreport',
                    'icon' => 'fas fa-fw fa-cubes',
                ],

//                [
//                    'text' => 'FinancialReport',
//                    'route'=>'admin.financialreport',
//                    'icon' => 'fas fa-fw fa-cubes',
//                ],

//                [
//                    'text' => 'MostActive',
//                    'route'=>'admin.mostactivereport',
//                    'icon' => 'fas fa-fw fa-cubes',
//                ],

                [
                    'text' => 'BondsReport',
                    'route'=>'admin.bondsreport',
                    'icon' => 'fas fa-fw fa-cubes',
                ],

                [
                    'text' => 'ExpensesReport',
                    'route'=>'admin.expensesreport',
                    'icon' => 'fas fa-fw fa-cubes',
                ],




            ],
        ],

        ['header' => 'SettingsHeader'],


        [
            'text' => 'Backup',
            'url' => '#',
            'icon' => 'fas fa fa-server',
            'submenu' => [
                [
                    'text' => 'Option',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-cubes',
                ],
            ],
        ]

    ],
    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    ||
    */
    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],
    /*
|--------------------------------------------------------------------------
| Plugins Initialization
|--------------------------------------------------------------------------
|
| Here we can modify the plugins used inside the admin panel.
|
||
*/
    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css',
                ], [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css',
                ], [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js',
                ], [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css',
                ],
            ],
        ],


        [
            'name' => 'Chartjs',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js',
                ],
            ],
        ],


        [
            'name' => 'chartisan',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'https://unpkg.com/@chartisan/chartjs/dist/chartisan_chartjs.js',
                ],


            ],
        ],


        [
            'name' => 'Sweetalert2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@9',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//unpkg.com/ionicons@5.0.0/dist/ionicons.js'
                ]
            ],
        ], [
            'name' => 'AnimateCss',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css',
                ],
            ],
        ],

        [
            'name' => 'Pace',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/black/pace-theme-corner-indicator.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],


    ],
];
