<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <a href="<?php echo e(route('admin.marketplaceOwner.create')); ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
        <div class="card m-2">
            <div class="card-header">
                <?php echo e(__('Models/Bonds.Columns.MarketPlaceOwner')); ?>

            </div>
            <div class="card-body">
                <table class="table-bordered  table text-center">
                    <thead class="thead-dark">
                        <th>#</th>
                        <th><?php echo e(__('branch.name')); ?></th>
                        <th><?php echo e(__('General.fields.Phonenumber')); ?></th>
                        <th><?php echo e(__('')); ?></th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $marketplaceOwners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $M): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($M->id); ?></td>
                                <td><?php echo e($M->user->Name); ?></td>
                                <td><?php echo e($M->PhoneNumber); ?></td>
                                <td>
                                    <form action="<?php echo e(route('admin.marketplaceOwner.destroy',$M)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <a href="<?php echo e(route('admin.marketplaceOwner.edit',$M)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?php echo e($marketplaceOwners->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/MarketPlaceOwner/index.blade.php ENDPATH**/ ?>