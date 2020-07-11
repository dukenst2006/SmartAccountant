<?php $__env->startSection('title', 'Stocks'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>المخزن الرئيسي</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?php echo e(__('Models/Warehouse.CardTitle')); ?></h3>
        </div>
        <div class="card-body card-body table-responsive p-0">

            <div class="col-3 animated bounceInUp">

                <div class="info-box bg-warning">

                    <div class="info-box-content">
                        <h4 class="info-box-text"><?php echo e(__('Models/Warehouse.ProductCount')); ?></h4>
                        <h4 class="info-box-number">

                            <?php echo e($warehouse->products_count); ?>


                        </h4>


                    </div>
                    <span class="info-box-icon">
                        <i class="fas fa-2x  fa-boxes"></i>
                    </span>

                </div>



            </div>

            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.warehouses.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




        </div>
    </div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/warehouses/index.blade.php ENDPATH**/ ?>