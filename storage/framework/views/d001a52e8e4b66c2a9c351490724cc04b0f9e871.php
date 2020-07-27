<?php $__env->startSection('title', 'Product Categories'); ?>

<?php $__env->startSection('content_header'); ?>
        <h1> <?php echo e(__('Models/Product.ProductCategories')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title"><?php echo e(__('Models/Product.ProductCategories')); ?></h3>
                </div>
            <div class="card-body">
                    <?php echo Form::open(['route' => 'admin.productCategories.store']); ?>


                        <?php echo $__env->make('admin.product_categories.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/product_categories/create.blade.php ENDPATH**/ ?>