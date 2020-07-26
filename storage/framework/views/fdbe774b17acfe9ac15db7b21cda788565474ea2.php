<?php $__env->startSection('title', 'Suppliers'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1><?php echo e(__("General.Titles.Suppliers")); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card box-primary">
            <div class="card-header">
                <h3 class="card-title"><?php echo e(__("General.Create")); ?></h3>
            </div>
            <div class="card-body" style="padding: 10px !important;">
                <?php echo Form::open(['route' => 'admin.suppliers.store']); ?>


                <?php echo $__env->make('admin.suppliers.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-acc.io/resources/views/admin/suppliers/create.blade.php ENDPATH**/ ?>