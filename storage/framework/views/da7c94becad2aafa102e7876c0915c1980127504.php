<div class="table-responsive">
    <table class="table table table-hover table-bordered table-dark " id="inventories-table ">
        <thead>
        <tr>
            <th class="text-center"><?php echo e(__('Models/Marketplace.Name')); ?></th>
            <th class="text-center"><?php echo e(__('Models/Inventory.ProductCount')); ?></th>

            <th colspan="3">أجراء</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $inventories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr   <?php echo e($inventory->products_count ==0 ? 'class=bg-danger':''); ?> >

                <td class="text-center"><?php echo e($inventory->marketplace->Name); ?></td>
                <td class="text-center"><?php echo e($inventory->products_count); ?></td>

                <td class="text-center">

                    <div class='btn-group'>
                        <a href="<?php echo e(route('admin.ProductTableView', ['MarketID' =>  $inventory->MarketPlace->id])); ?>"
                           class='btn btn-warning btn-sm p-1'><i class="fas fa-2x fa-eye"></i></a>
                    </div>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>






<?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/inventories/table.blade.php ENDPATH**/ ?>