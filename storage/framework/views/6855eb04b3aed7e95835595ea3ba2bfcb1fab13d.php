<?php $__env->startSection('title', 'Safe'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1><i class="fas fa-dollar-sign"></i> الخزينة </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <div class="row col-12  justify-content-center">
            <div class="row col-md-6 col-sm-6 col-6">
                <div class="col-md-4 col-sm-6 col-12 animated flipInX">
                    <div class="info-box bg-danger  ">
                    <span class="info-box-icon">
                        <i class="fas fa-2x fa-sort-amount-down-alt index-val"></i>
                    </span>
                        <div class="info-box-content">
                            <h1 class="info-box-text">الخسائر</h1>
                            <h2 class="info-box-number">
                                <?php echo e($expenses->sum('Price') - $invoices->sum('paid') > 0? $expenses->sum('Price') - $invoices->sum('paid'):0); ?>

                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 col-sm-6 col-12 animated flipInX">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fas fa-2x fa-sort-amount-up index-val"></i></span>

                        <div class="info-box-content">
                            <h1 class="info-box-text">الأرباح</h1>
                            <h2 class="info-box-number">
                                <?php echo e($invoices->sum('Paid')  > 0? $invoices->sum('Paid') :0); ?>

                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-12 animated flipInX">
                    <div class="info-box bg-primary">
                        <span class="info-box-icon"><i class="fas fa-2x fa-money-check-alt index-val"></i></span>

                        <div class="info-box-content">
                            <h1 class="info-box-text">الضريبة</h1>
                            <h2 class="info-box-number">
                                <?php echo e((($invoices->sum('Paid')  > 0 ? $invoices->sum('Paid') :0)/100) * auth()->user()->settings->VAT); ?>

                            </h2>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="main-tbl" style="overflow:auto;">
        <table class="table table-bordered  table-striped">
            <tr  class=" text-white main-bg-blu-color">
                <th>المتجر</th>
                <th>عدد الفواتير</th>
                <th>اجمالي قيمة الفواتير</th>
                <th>اجمالي قيمة المدفوع</th>
                <th>اجمالي قيمة الضريبة</th>
                <th>اجمالي قيمة المتبقي</th>
                <th>اجمالي المصاريف</th>
                <th>صافي</th>
            </tr>
            <?php $__currentLoopData = $markets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($market->Name); ?></td>
                    <td><?php echo e($market->invoices->count()); ?></td>
                    <td><?php echo e($market->invoices->sum('Total')); ?></td>
                    <td><?php echo e($market->invoices->sum('Paid')); ?></td>
                    <td><?php echo e($market->invoices->sum('Paid') / 100 * auth()->user()->settings->VAT); ?></td>
                    <td><?php echo e($market->invoices->sum('Rest')); ?></td>
                    <td><?php echo e($market->expenses->sum('Price')); ?></td>
                    <td><?php echo e($market->invoices->sum('Paid') - $market->expenses->sum('Price')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td colspan="7" class="text-center">
                    <?php echo e($markets); ?>

                </td>
            </tr>
        </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/treasure/index.blade.php ENDPATH**/ ?>