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
            <img src="data:image/png;base64,<?php echo e(\DNS1D::getBarcodePNG('INVOICE ID ', 'C39+',3,50)); ?>" alt="barcode" width="100" height="50" />
                <p><?php echo e($invoice->CustomerName); ?></p>
                <p>الرياض - الحمراء</p>
                <?php if(!empty(auth()->user()->settings->EnableVAT)): ?>
                <p>
                    الرقم الضريبي 
                    <?php if(!empty($invoice->marketplace)): ?>
                        <span class="en-font">
                            <?php echo e($invoice->marketplace->TaxNumber); ?>

                        </span>
                    <?php else: ?>
                        <span class="en-font">
                            خطأ بقاعدة البيانات: لا يوجد رقم ضريبي يرجى تعيينه
                        </span>
                    <?php endif; ?>
                </p>
                <?php endif; ?>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-acc.io/resources/views/admin/Invoices/receipt.blade.php ENDPATH**/ ?>