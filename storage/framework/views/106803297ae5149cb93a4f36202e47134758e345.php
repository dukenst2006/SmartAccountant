
<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('content_header'); ?>
     <h1>
            Product
        </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Product</h3>

               </div>
           <div class="card-body">

                   <?php echo Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('admin.products.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                   <?php echo Form::close(); ?>


           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>