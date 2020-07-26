<?php $__env->startSection('title', 'فواتير البيع'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>فواتير كتابية</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="main">
        <!-- Start top-section -->
        <div class="logo-show-mobile">
            <img src="/Images/logo.png" class="img-fluid" alt="logo">
        </div>
        <div class="title-table">
            <div class="right-sec">
                <p>الرياض - الحمراء</p>
                <p>الرقم الضريبي <span class="en-font">(12554877)</span></p>
            </div>
            <div class="center-sec">
                <p>رقم الفاتورة: <?php echo e($invoice->invoice_code); ?></p>
                <p class="en-font"> <b>  <?php echo e($invoice->id); ?> #</b>
                <p>
                    حالة الفاتورة <?php echo e(($invoice->Rest != 0)? "(غير مسدد)" : "(مسدد)"); ?>

                </p>
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
                    <th>المدفوع</th>
                    <th>المتبقى</th>
                </tr>
                    <tr>
                        <td><?php echo e($invoice->Paid); ?>$</td>
                        <td><?php echo e($invoice->Rest); ?>$</td>
                    </tr>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-acc.io/resources/views/admin/Invoices/show_raw_invoice_details.blade.php ENDPATH**/ ?>