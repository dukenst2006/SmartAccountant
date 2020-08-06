
<?php $__env->startSection('title', 'موظفى الفروع'); ?>

<?php $__env->startSection('content_header'); ?>
        <h1>    <?php echo e(__('General.Titles.Employees')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title"><?php echo e(__("General.Create")); ?></h3>
                </div>
            <div class="card-body" style="padding: 20px !important;">
                    <?php echo Form::open(['route' => 'admin.employees.store','files'=> true]); ?>


                        <?php echo $__env->make('admin.employees.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/employees/create.blade.php ENDPATH**/ ?>