<?php $__env->startSection('title', 'تقارير مبيعات الفروع'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>تقارير مبيعات الفروع</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">


        <div class="col-md-8">

            <p class="text-center">
                <strong> مبيعات الفروع لاخر شهر</strong>
            </p>
            <div id="chart">

                <?php echo $chart->container(); ?>


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
    <?php echo $chart->script(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Reports/marketplaces.blade.php ENDPATH**/ ?>