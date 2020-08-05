<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" <?php echo e((app()->getLocale() == "ar") ? 'dir=rtl' :""); ?> >

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <?php echo $__env->yieldContent('meta_tags'); ?>

    
    <title>
        <?php echo $__env->yieldContent('title_prefix', config('adminlte.title_prefix', '')); ?>
        <?php echo $__env->yieldContent('title', config('adminlte.title', 'AdminLTE 3')); ?>
        <?php echo $__env->yieldContent('title_postfix', config('adminlte.title_postfix', '')); ?>
    </title>

    
    <?php echo $__env->yieldContent('adminlte_css_pre'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>">
    
    <?php if(!config('adminlte.enabled_laravel_mix')): ?>

        <link rel="stylesheet" href="<?php echo e(asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">

        
        <?php echo $__env->make('adminlte::plugins', ['type' => 'css'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/dist/css/adminlte.min.css')); ?>">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <?php echo $__env->make('adminlte::plugins', ['type' => 'css'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <?php if(app()->getLocale() == "ar"): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/ar.css')); ?>">
    <?php endif; ?>

    
    <?php echo $__env->yieldContent('adminlte_css'); ?>

    
    <?php if(config('adminlte.use_ico_only')): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('favicons/favicon.ico')); ?>"/>
    <?php elseif(config('adminlte.use_full_favicon')): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('favicons/favicon.ico')); ?>"/>
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('favicons/apple-icon-57x57.png')); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('favicons/apple-icon-60x60.png')); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('favicons/apple-icon-72x72.png')); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('favicons/apple-icon-76x76.png')); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('favicons/apple-icon-114x114.png')); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('favicons/apple-icon-120x120.png')); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('favicons/apple-icon-144x144.png')); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('favicons/apple-icon-152x152.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('favicons/apple-icon-180x180.png')); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('favicons/favicon-16x16.png')); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('favicons/favicon-32x32.png')); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('favicons/favicon-96x96.png')); ?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('favicons/android-icon-192x192.png')); ?>">
        <link rel="manifest" href="<?php echo e(asset('favicons/manifest.json')); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo e(asset('favicon/ms-icon-144x144.png')); ?>">
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</head>

<body class="<?php echo $__env->yieldContent('classes_body'); ?> <?php echo e((app()->getLocale() == "ar") ? 'text-right' :""); ?> " <?php echo $__env->yieldContent('body_data'); ?> >

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('body'); ?>


<?php echo $__env->make('vendor.adminlte.partials.footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php if(!config('adminlte.enabled_laravel_mix')): ?>

    <script src="<?php echo e(asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    
    <?php echo $__env->make('vendor.adminlte.plugins', ['type' => 'js'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <?php echo $__env->make('vendor.adminlte.plugins', ['type' => 'js'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php echo $__env->yieldContent('adminlte_js'); ?>

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
<?php echo $__env->yieldContent('customejs'); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>

</body>

</html>
<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/vendor/adminlte/master.blade.php ENDPATH**/ ?>