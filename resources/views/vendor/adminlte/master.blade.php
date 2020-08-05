<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ (app()->getLocale() == "ar") ? 'dir=rtl' :""}} >

<head>

    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Custom Meta Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'AdminLTE 3'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))
    </title>

    {{-- Custom stylesheets (pre AdminLTE) --}}
    @yield('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    {{-- Base Stylesheets --}}
    @if(!config('adminlte.enabled_laravel_mix'))

        <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

        {{-- Configured Stylesheets --}}
        @include('adminlte::plugins', ['type' => 'css'])

        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @include('adminlte::plugins', ['type' => 'css'])

    @endif
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    @if(app()->getLocale() == "ar")
        <link rel="stylesheet" href="{{ asset('css/ar.css') }}">
    @endif

    {{-- Custom Stylesheets (post AdminLTE) --}}
    @yield('adminlte_css')

    {{-- Favicon --}}
    @if(config('adminlte.use_ico_only'))
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}"/>
    @elseif(config('adminlte.use_full_favicon'))
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}"/>
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
        <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body class="@yield('classes_body') {{ (app()->getLocale() == "ar") ? 'text-right' :""}} " @yield('body_data') >

@include('sweetalert::alert')
{{-- Body Content --}}
@yield('body')


@include('vendor.adminlte.partials.footer.footer')


{{-- Base Scripts --}}
@if(!config('adminlte.enabled_laravel_mix'))

    <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    {{--    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>--}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- Configured Scripts --}}
    @include('vendor.adminlte.plugins', ['type' => 'js'])
@else
    <script src="{{ asset('js/app.js') }}"></script>

    @include('vendor.adminlte.plugins', ['type' => 'js'])

@endif
@yield('adminlte_js')
{{-- Custom Scripts --}}
<script>
    $('body').overlayScrollbars({});
</script>
<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" style="max-height: 600px; overflow: auto;">
        <div class="modal-content content">
            <div class="modal-header card-header">
                <h5 class="modal-title" id="productLabel">الأصناف المفضلة</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"
                        style="margin: -1rem auto -1rem -1rem;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                    زيادة عدد الحروف التى يولدها التطبيق.</p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl" data-toggle="modal"
                                        data-target="#productsModal"><i class="fas fa-eye fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                    زيادة عدد الحروف التى يولدها التطبيق.</p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl" data-toggle="modal"
                                        data-target="#productsModal"><i class="fas fa-eye fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                    زيادة عدد الحروف التى يولدها التطبيق.</p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl" data-toggle="modal"
                                        data-target="#productsModal"><i class="fas fa-eye fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                    زيادة عدد الحروف التى يولدها التطبيق.</p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl" data-toggle="modal"
                                        data-target="#productsModal"><i class="fas fa-eye fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                    زيادة عدد الحروف التى يولدها التطبيق.</p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl" data-toggle="modal"
                                        data-target="#productsModal"><i class="fas fa-eye fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى
                                    زيادة عدد الحروف التى يولدها التطبيق.</p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl" data-toggle="modal"
                                        data-target="#productsModal"><i class="fas fa-eye fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-labelledby="productsModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content content">
            <div class="modal-header card-header">
                <h5 class="modal-title" id="productsLabel">المنتجات</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"
                        style="margin: -1rem auto -1rem -1rem;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <img class="w-100 img-pdt"
                                     src="https://www.webulousthemes.com/wp-content/uploads/2017/02/installation-icon.png"
                                     alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center"><b>السعر:</b> <span>5 $</span></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl text-success"><i
                                            class="fas fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <img class="w-100 img-pdt"
                                     src="https://www.webulousthemes.com/wp-content/uploads/2017/02/installation-icon.png"
                                     alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center"><b>السعر:</b> <span>5 $</span></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl text-success"><i
                                            class="fas fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <img class="w-100 img-pdt"
                                     src="https://www.webulousthemes.com/wp-content/uploads/2017/02/installation-icon.png"
                                     alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center"><b>السعر:</b> <span>5 $</span></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl text-success"><i
                                            class="fas fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <img class="w-100 img-pdt"
                                     src="https://www.webulousthemes.com/wp-content/uploads/2017/02/installation-icon.png"
                                     alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center"><b>السعر:</b> <span>5 $</span></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl text-success"><i
                                            class="fas fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <img class="w-100 img-pdt"
                                     src="https://www.webulousthemes.com/wp-content/uploads/2017/02/installation-icon.png"
                                     alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center"><b>السعر:</b> <span>5 $</span></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl text-success"><i
                                            class="fas fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <img class="w-100 img-pdt"
                                     src="https://www.webulousthemes.com/wp-content/uploads/2017/02/installation-icon.png"
                                     alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center"><b>السعر:</b> <span>5 $</span></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl text-success"><i
                                            class="fas fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <img class="w-100 img-pdt"
                                     src="https://www.webulousthemes.com/wp-content/uploads/2017/02/installation-icon.png"
                                     alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center"><b>السعر:</b> <span>5 $</span></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl text-success"><i
                                            class="fas fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="cep">
                            <div class="text-center">
                                <img class="w-100 img-pdt"
                                     src="https://www.webulousthemes.com/wp-content/uploads/2017/02/installation-icon.png"
                                     alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center"><b>السعر:</b> <span>5 $</span></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default border-0 bg-transparent eye-mdl text-success"><i
                                            class="fas fa-plus-circle fa-2x"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('customejs')
@stack('scripts')

</body>

</html>
