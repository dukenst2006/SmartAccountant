<?php $__env->startSection('title', 'مخازن الفروع'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1><?php echo e(__('Models/Inventory.Header')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
    <div class="col-md-8 my-4 chart-modifications ">
        <h3 class="text-center my-3">مستوي المنتجات في مخازن الفروع</h3>




            <div id="chart">

                <?php echo $inventoriesCharts->container(); ?>


            </div>


    </div>

    </div>
    <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('admin.inventories.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="text-center">
        <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $inventories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customejs'); ?>
    <?php echo $inventoriesCharts->script(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/inventories/index.blade.php ENDPATH**/ ?>