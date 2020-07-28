
<?php $__env->startSection('title', 'Marketplaces'); ?>

<?php $__env->startSection('content_header'); ?>
        <h1><?php echo e(__("menu.Marketplaces")); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title"><?php echo e(__("General.Create")); ?></h3>
                </div>
            <div class="card-body" style="padding: 10px !important;">
                    <?php echo Form::open(['route' => 'admin.marketplaces.store','files'=>true]); ?>


                       <div class="row w-100 p-0 m-0">
                           <?php echo $__env->make('admin.marketplaces.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       </div>

                    <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/marketplaces/create.blade.php ENDPATH**/ ?>