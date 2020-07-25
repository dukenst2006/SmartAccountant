<?php $__env->startSection('title', 'فواتير البيع'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>فواتير البيع</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main">
        <!-- Start top-section -->
        <div class="logo-show-mobile">
            <img src="/Images/logo.png" class="img-fluid" alt="logo">
        </div>
        <div class="title-table">
            <div class="right-sec">
                <p><?php echo e($invoice->CustomerName); ?></p>
                <p>الرياض - الحمراء</p>
                <p>الرقم الضريبي <span class="en-font">(12554877)</span></p>
            </div>
            <div class="center-sec">
                <p>رقم الفاتورة</p>
                <p class="en-font"> <b>  <?php echo e($invoice->id); ?> #</b>
                <p>حالة الفاتورة (مسددة)</p>
            </div>
            <div class="logo">
                <img src="/Images/logo.png" class="img-fluid" alt="logo">
            </div>
        </div>
        <!-- End top-section -->
        <!-- Start Table -->
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>المنتجات</th>
                    <th>الكمية</th>
                    <th>السعر</th>
                    <th>المجموع</th>
                </tr>
                <?php $__currentLoopData = $invoice->invoiceItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->product->name); ?></td>
                        <td><?php echo e($item->Quantity); ?></td>
                        <td><?php echo e($item->UnitPrice); ?>$</td>
                        <td><?php echo e($item->Total); ?>$</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <!-- End Table -->
        <!-- Start bottom-section -->
        <div class="bottom-section text-bold">
            <p>يشمل القيمة الماضفة <span><?php echo e(auth()->user()->settings->VAT); ?>%</span></p>
            <span class="grand-total text-bold">المبلغ الاجمالي : <span class="en-font">$<?php echo e($invoice->Total); ?></span></span>
        </div>

        <!-- End bottom-section -->
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Invoices/receipt.blade.php ENDPATH**/ ?>