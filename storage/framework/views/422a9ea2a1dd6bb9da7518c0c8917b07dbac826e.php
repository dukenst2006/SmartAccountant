
<?php $__env->startSection('title', 'الفواتير'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="mb-3"><i class="fas fa-file-invoice-dollar"></i> الفواتير </h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="main-tbl" style="overflow:auto;">
    <table class="table table-striped" style="min-width: 1000px">
        <thead class="text-center">
        <tr style="color: #FFF;background-color: #5b75b5">
            <th>مسلسل</th>
            <th scope="col">اسم الفرع</th>
            <th scope="col">طريقة الدفع</th>
            <th scope="col">كود الفاتورة</th>
            <th scope="col">الأسم</th>
            <th scope="col">الاجمالي</th>
            <th scope="col">المدفوع</th>
            <th scope="col">المتبقي</th>
            <!-- <th scope="col">الوضع</th> -->
            <th scope="col">اجراءات</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <?php if(!empty($sale_invoices)): ?>
        <?php $__currentLoopData = $sale_invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <a title="عرض" href="<?php echo e(route('admin.sale_invoice.show', $invoice->id)); ?>" class='btn btn-warning btn-sm' style="color: #ffffff">
                    <i class="fas fa-2x fa-eye"></i>
                </a>
            </td>
            <td><?php echo e($invoice->marketplace->Name); ?></td>
            <td class="text-info"><?php echo e($invoice->paymenttype->Name); ?></td>
            <td class="text-info"><?php echo e($invoice->invoice_code); ?></td>
            <td><?php echo e($invoice->CustomerName); ?></td>
            <td class="text-info"><?php echo e($invoice->Total); ?></td>
            <td><?php echo e($invoice->Paid); ?></td>
            <td><?php echo e($invoice->Rest); ?></td>
            <!-- <td><input type="checkbox"> </td> -->
            <td>
            
                <a title="حذف" href="invoiceraw/<?php echo e($invoice->id); ?>/delete" class="text-danger"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <h3 class="text-center">لا توجد فواتير للعرض</h3>
        <?php endif; ?>
        </tbody>
    </table>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Invoices/sale_invoices_index.blade.php ENDPATH**/ ?>