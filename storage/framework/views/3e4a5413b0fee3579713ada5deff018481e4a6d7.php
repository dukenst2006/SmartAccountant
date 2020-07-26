<?php $__env->startSection('title', 'الفواتير'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="mb-3"><i class="fas fa-file-invoice-dollar"></i> الفواتير </h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="main-tbl" style="overflow:auto;">
    <table class="table table-striped" style="min-width: 1000px">
        <thead class="text-center">
        <tr style="color: #FFF;background-color: #5b75b5">
            <th scope="col">مسلسل</th>
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
        <?php $__currentLoopData = $rawInvoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <a title="عرض" href="<?php echo e(route('admin.raw_invoice.show', $invoice->id)); ?>" class='btn btn-warning btn-sm' style="color: #ffffff">
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
                <!-- <a title="بحث"  href="" class="text-dark"><i class="fas fa-search"></i></a>
                <a title="تعديل" href="" class="text-info"><i class="fas fa-pencil-alt"></i></a>
                <a title="طباعة" href="" class="" style="color: #e87c85"><i class="fas fa-print"></i></a>
                <a title="تحميل" href="" class="text-success"><i class="fas fa-download"></i></a>
                <a title="ارسال ايميل" href="" class="" style="color: #6a6a6a"><i class="fas fa-envelope"></i></a>
                <a title="السلة" href="" class="" style="color: #3b5998"><i class="fas fa-shopping-cart"></i></a> -->
                <a title="حذف" href="invoiceraw/<?php echo e($invoice->id); ?>/delete" class="text-danger"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-acc.io/resources/views/admin/Invoices/index.blade.php ENDPATH**/ ?>