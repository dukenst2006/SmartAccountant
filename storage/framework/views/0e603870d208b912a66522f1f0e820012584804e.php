<?php $__env->startSection('title', 'Suppliers'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1><?php echo e(__("General.Titles.Suppliers")); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">

        
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title"><?php echo e(__("General.All")); ?></h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="text-center">
                    <table class="table table-striped" style="min-width: 1000px">
                        <thead class="text-center">
                        <tr style="color: #FFF;background-color: #5b75b5">
                            <th scope="col">
                                <?php echo e(__('Models/SupplierInvoices.Supplier')); ?>

                            </th>
                            <th scope="col">
                                <?php echo e(__('Models/Invoice.PaymentTypeID')); ?>

                            </th>
                            <th scope="col">
                                <?php echo e(__('Models/SupplierInvoices.Total')); ?>

                            </th>
                            <th scope="col">
                                <?php echo e(__('Models/SupplierInvoices.Paid')); ?>

                            </th>
                            <th scope="col">
                                <?php echo e(__('Models/SupplierInvoices.Rest')); ?>

                            </th>
                            <!-- <th scope="col">الوضع</th> -->
                            <th scope="col">اجراءات</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php $__currentLoopData = $supplierInvoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-info"><?php echo e($invoice->supplier->Name); ?></td>
                            <td><?php echo e($invoice->paymenttype->Name); ?></td>
                            <td><?php echo e($invoice->Amount); ?>$</td>
                            <td><?php echo e($invoice->Paid); ?>$</td>
                            <td><?php echo e($invoice->Rest); ?>$</td>
                            <!-- <td><input type="checkbox"> </td> -->
                            <td>
                                <!-- <a title="بحث"  href="" class="text-dark"><i class="fas fa-search"></i></a>
                                <a title="تعديل" href="" class="text-info"><i class="fas fa-pencil-alt"></i></a>
                                <a title="طباعة" href="" class="" style="color: #e87c85"><i class="fas fa-print"></i></a>
                                <a title="تحميل" href="" class="text-success"><i class="fas fa-download"></i></a>
                                <a title="ارسال ايميل" href="" class="" style="color: #6a6a6a"><i class="fas fa-envelope"></i></a>
                                <a title="السلة" href="" class="" style="color: #3b5998"><i class="fas fa-shopping-cart"></i></a> -->
                                <a title="حذف" href="Admin/supplier-invoice/<?php echo e($invoice->id); ?>/delete" class="text-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-acc.io/resources/views/admin/suppliers/invoice/index.blade.php ENDPATH**/ ?>