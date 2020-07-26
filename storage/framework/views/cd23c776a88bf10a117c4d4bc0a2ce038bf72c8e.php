<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <div class="card p-3">
            <form action="<?php echo e(route('admin.ProductTableView')); ?>" method="get">
                <div class="form-group">
                    <label for=""><?php echo e(__('Models/Marketplace.Name')); ?></label>
                    <select name="InventoryID" class="form-control">
                        <option value=""><?php echo e(__('General.All')); ?></option>
                        <?php $__currentLoopData = @App\Models\Inventory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $M): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($M->id); ?>"><?php echo e($M->MarketPlace->Name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <button type="submit" class="btn btn-success"><?php echo e(__('money.search')); ?></button>
                </div>
            </form>
        </div>
        <table class="table table-bordered m-2">
            <thead class="thead-light">
            <th>#</th>
            <th><?php echo e(__('Models/Product.Name')); ?></th>
            <th><?php echo e(__('Models/Product.LowPrice')); ?></th>
            <th><?php echo e(__('Models/Product.ExpiryDate')); ?></th>
            <th><?php echo e(__('Models/Product.Quantity')); ?></th>
            <th><?php echo e(__('Models/Product.PurchasingPrice')); ?></th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->Name); ?></td>
                    <td><?php echo e($product->LowPrice); ?></td>
                    <td><?php echo e($product->ExpiryDate); ?></td>
                    <td><?php echo e($product->Quantity); ?></td>
                    <td><?php echo e($product->PurchasingPrice); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($products->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/ProductsView/index.blade.php ENDPATH**/ ?>