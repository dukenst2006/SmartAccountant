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
                    <form method="get" action="<?php echo e(route('admin.marketplacesreport')); ?>">
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for=""><?php echo e(__('money.from')); ?></label>
                                <input class="form-control" type="date" name="from" id="">
                            </div>
                            <div class="col-6 form-group">
                                <label for=""><?php echo e(__('money.to')); ?></label>
                                <input class="form-control" type="date" name="to" id="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><?php echo e(__('money.search')); ?></button>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th><?php echo e(__('Models/Marketplace.Name')); ?></th>
                            <th><?php echo e(__('dashboard.bills')); ?></th>
                            <th><?php echo e(__('Models/Invoice.Paid')); ?></th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $marketplacesTable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $M): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($M->id); ?></td>
                                    <td><?php echo e($M->Name); ?></td>
                                    <td><?php echo e($M->invoices->count()); ?></td>
                                    <td><?php echo e($M->invoices->sum('Paid')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <?php echo e($marketplacesTable->links()); ?>

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