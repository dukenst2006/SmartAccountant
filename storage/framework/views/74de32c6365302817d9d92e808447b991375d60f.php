<?php $__env->startSection('title', 'Suppliers'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>الموزعين</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">

        
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">الكل</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.suppliers.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="text-center">

                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/suppliers/index.blade.php ENDPATH**/ ?>