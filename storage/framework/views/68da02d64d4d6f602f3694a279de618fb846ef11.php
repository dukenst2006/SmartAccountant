<?php $__env->startSection('title', 'Marketplaces'); ?>

<?php $__env->startSection('content_header'); ?>
        <h1>    الفروع</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">انشاء</h3>
                </div>
            <div class="card-body">
                    <?php echo Form::open(['route' => 'admin.marketplaces.store','files'=>true]); ?>


                        <?php echo $__env->make('admin.marketplaces.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/marketplaces/create.blade.php ENDPATH**/ ?>