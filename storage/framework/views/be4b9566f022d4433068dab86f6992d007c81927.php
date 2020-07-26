<?php $__env->startSection('title', 'تقارير المنتجات'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>تقارير المنتجات</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">


        <div class="col-md-8">

            <p class="text-center">
                <strong> أعلي 10 منتجات مبيعاً هذا الشهر</strong>
            </p>
            <div id="chart">

                <?php echo $productchart->container(); ?>


            </div>


        </div>

    </div>
    <div class="row justify-content-center">


    <div class="col-md-8">




            <div id="chart">

               <?php echo $productchart->container(); ?>


            </div>


    </div>

    </div>

    <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">

        </div>
        <div class="text-center">


        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customejs'); ?>
    <?php echo $productchart->script(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Reports/product.blade.php ENDPATH**/ ?>