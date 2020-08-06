<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <a href="<?php echo e(route('admin.marketplaceOwner.index')); ?>" class="btn btn-success"><i class="fa fa-list"></i></a>
        <div class="card m-2">
            <div class="card-header">
                <?php echo e(__('Models/Bonds.Columns.MarketPlaceOwner')); ?>

            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.marketplaceOwner.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for=""><?php echo e(__("Models/User.Name")); ?></label>
                        <input class="form-control" name="Name">
                    </div>
                    <div class="form-group">
                        <label for=""><?php echo e(__("Models/User.Email")); ?></label>
                        <input class="form-control" name="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><?php echo e(__("General.fields.Phonenumber")); ?></label>
                        <input class="form-control" name="PhoneNumber">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="password" name="Password">
                    </div>
                    <button type="submit" class="btn btn-success"><?php echo e(__('Buttons.Save')); ?></button>
                </form>
            </div>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/MarketPlaceOwner/create.blade.php ENDPATH**/ ?>