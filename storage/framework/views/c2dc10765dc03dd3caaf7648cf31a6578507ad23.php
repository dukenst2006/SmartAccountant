<?php $__env->startSection('title', 'تقارير المنتجات'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>تقارير المنتجات</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">


        <div class="col-md-8">

            <p class="text-center">
                <strong> أعلي 10 منتجات مبيعاً هذا الشهر</strong>
            </p>
            <div id="chart">

                <?php echo $productchart->container(); ?>


            </div>



        </div>

    </div>
    <div class="row justify-content-center">


    <div class="col-md-8">




            <div id="chart">

               <?php echo $productchart->container(); ?>


            </div>


    </div>
        <div class="card">
            <div class="card-header">
                <?php echo e(__('Models/Product.Products')); ?>

            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                    <th>#</th>
                    <th><?php echo e(__("Models/Product.Name")); ?></th>
                    <th><?php echo e(__("Models/Product.Quantity")); ?></th>
                    <th><?php echo e(__("Models/Product.PurchasingPrice")); ?></th>
                    <th><?php echo e(__("Models/Product.SellingPrice")); ?></th>
                    <th><?php echo e(__("Models/Product.LowPrice")); ?></th>
                    <th><?php echo e(__("Models/Product.ExpiryDate")); ?></th>
                    <th><?php echo e(__("Models/Product.ProductCategoryID")); ?></th>
                    <th><?php echo e(__("Models/Product.ProductSubCategoryID")); ?></th>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $P): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($P->id); ?></td>
                            <td><?php echo e($P->Name); ?></td>
                            <td><?php echo e($P->Quantity); ?></td>
                            <td><?php echo e($P->PurchasingPrice); ?></td>
                            <td><?php echo e($P->SellingPrice); ?></td>
                            <td><?php echo e($P->LowPrice); ?></td>
                            <td><?php echo e($P->ExpiryDate); ?></td>
                            <td><?php echo e($P->ProductCategory->Name); ?></td>
                            <td><?php echo e($P->ProductSubCategory->Name); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>

    <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">

        </div>
        <div class="text-center">


        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customejs'); ?>
    <?php echo $productchart->script(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/Reports/product.blade.php ENDPATH**/ ?>