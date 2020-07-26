<?php $__env->startSection('css'); ?>
    <?php echo $__env->make('layouts.datatables_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered compact']); ?>


<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('layouts.datatables_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>
<?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/product_categories/table.blade.php ENDPATH**/ ?>