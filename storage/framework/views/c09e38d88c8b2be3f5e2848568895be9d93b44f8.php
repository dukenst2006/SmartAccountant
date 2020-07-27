<?php $__env->startSection('title', 'تقارير مبيعات الفروع'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>تقارير مبيعات الفروع</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">


        <div class="col-md-8">

            <p class="text-center">
                <strong> مبيعات الفروع لاخر شهر</strong>
            </p>
            <div id="chart">

                <?php echo $chart->container(); ?>


            </div>
            <div class="card">
                <div class="card-header">
                    <form class="p-3" action="<?php echo e(route('admin.marketplacesreport')); ?>" method="get">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Safe.From')); ?></label>
                                    <input type="date" class="form-control" name="from">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Safe.To')); ?></label>
                                    <input type="date" class="form-control" name="to">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for=""><?php echo e(__('Models/Marketplace.Name')); ?></label>
                                    <select name="MarketPlaceID" class="form-control" id="">
                                        <option value="">كل الفروع</option>
                                        <?php $__currentLoopData = @App\Models\Marketplace::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $M): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($M->id); ?>"><?php echo e($M->Name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><?php echo e(__('money.search')); ?></button>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th><?php echo e(__('Models/Marketplace.Name')); ?></th>
                            <th><?php echo e(__('Models/Inventory.ProductCount')); ?></th>
                            <th><?php echo e(__('Models/Invoice.Total')); ?></th>
                            <th><?php echo e(__('Models/Invoice.Paid')); ?></th>
                            <th><?php echo e(__('Models/Invoice.Rest')); ?></th>
                            <th><?php echo e(__('Models/Bonds.Columns.ClientName')); ?></th>
                            <th><?php echo e(__('Models/Invoice.PaymentTypeID')); ?></th>
                            <th><?php echo e(__('Models/Expenses.Date')); ?></th>
                            <th><?php echo e(__('الوقت')); ?></th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $M): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($M->id); ?></td>
                                    <td><?php echo e($M->MarketPlace->Name); ?></td>
                                    <td><?php echo e($M->invoiceItems->count()); ?></td>
                                    <td><?php echo e($M->sum('Total')); ?></td>
                                    <td><?php echo e($M->sum('Paid')); ?></td>
                                    <td><?php echo e($M->sum('Rest')); ?></td>
                                    <td><?php echo e($M->ClientName ?? __("لم يدون")); ?></td>
                                    <td><?php echo e($M->paymenttype->Name); ?></td>
                                    <td><?php echo e($M->created_at->format('Y/m/d')); ?></td>
                                    <td><?php echo e($M->created_at->format('h:i')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <?php echo e($invoices->links()); ?>

                </div>
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/Reports/marketplaces.blade.php ENDPATH**/ ?>