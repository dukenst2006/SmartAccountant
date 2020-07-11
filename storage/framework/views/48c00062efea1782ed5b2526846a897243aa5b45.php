<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content_header'); ?>
        <h1>    Product</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Product</h3>
                </div>
            <div class="card-body">
                    <?php echo Form::open(['route' => 'admin.products.store','files'=>true]); ?>


                        <?php echo $__env->make('admin.products.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/products/create.blade.php ENDPATH**/ ?>