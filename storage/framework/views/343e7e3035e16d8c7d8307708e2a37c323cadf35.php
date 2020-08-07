<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <a href="<?php echo e(route('admin.marketplaceOwner.index')); ?>" class="btn btn-success"><i class="fa fa-list"></i></a>
        <div class="card m-2">
            <div class="card-header">
                <?php echo e(__('Models/Bonds.Columns.MarketPlaceOwner')); ?>

            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.marketplaceOwner.update',$marketplaceOwner)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('patch'); ?>
                    <div class="form-group">
                        <label for=""><?php echo e(__("Models/User.Name")); ?></label>
                        <input class="form-control" value="<?php echo e($marketplaceOwner->user->Name); ?>" name="Name">
                    </div>
                    <div class="form-group">
                        <label for=""><?php echo e(__("Models/User.Email")); ?></label>
                        <input class="form-control" value="<?php echo e($marketplaceOwner->user->Email); ?>" name="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><?php echo e(__("General.fields.Phonenumber")); ?></label>
                        <input class="form-control" value="<?php echo e($marketplaceOwner->PhoneNumber); ?>" name="PhoneNumber">
                    </div>
                    <div class="form-group">
                        <label for=""><?php echo e(__("Models/User.Password")); ?></label>
                        <input class="form-control" value="same" type="password" name="Password">
                    </div>
                    <button type="submit" class="btn btn-success"><?php echo e(__('Buttons.Update')); ?></button>
                </form>
            </div>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/MarketPlaceOwner/edit.blade.php ENDPATH**/ ?>