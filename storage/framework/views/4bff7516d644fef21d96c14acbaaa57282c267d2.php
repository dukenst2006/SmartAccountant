
<?php $__env->startSection('title', 'Stocks'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
    <div class="col-md-8">




            <div id="chart">

                <?php echo $employeechart->container(); ?>


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
    <?php echo $employeechart->script(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Reports/employees.blade.php ENDPATH**/ ?>