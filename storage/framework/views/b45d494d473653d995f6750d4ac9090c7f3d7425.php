<?php $__env->startSection('title', 'Stocks'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                فلتر
            </div>
            <div class="card-body p-2">
                <form class="p-3" action="<?php echo e(route('admin.bondsreport')); ?>" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for=""><?php echo e(__('Safe.From')); ?></label>
                                <input type="date" class="form-control" name="from">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for=""><?php echo e(__('Safe.To')); ?></label>
                                <input type="date" class="form-control" name="to">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"><?php echo e(__('بحث')); ?></button>
                </form>
            </div>
        </div>



            <div id="chart">

                <?php echo $ammountchart->container(); ?>


            </div>


    </div>

    </div>
    <div class="row justify-content-center">
    <div class="col-md-8">




            <div id="chart">

                <?php echo $voucherchart->container(); ?>


            </div>

        <?php if(!$BondAmounts->isEmpty()): ?>


        <div class=" row">
            <div class="col-6">
                <table class="table-bordered table">
                    <thead class="thead-light">
                    <th>#</th>
                    <th><?php echo e(__('Models/Bonds.Columns.MarketPlaceOwner')); ?></th>
                    <th><?php echo e(__('Models/Bonds.Columns.ClientName')); ?></th>
                    <th><?php echo e(__('Models/Bonds.Columns.Amount')); ?></th>
                    <th><?php echo e(__('Models/Bonds.Columns.BondDate')); ?></th>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $BondAmounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $B): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($B->id); ?></td>
                        <td><?php echo e($B->MarketPlace); ?></td>
                        <td><?php echo e($B->ClientName); ?></td>
                        <td><?php echo e($B->ammount); ?></td>
                        <td><?php echo e($B->ammount_date); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <table class="table-bordered table">
                    <thead class="thead-light">
                    <th>#</th>
                    <th><?php echo e(__('Models/Bonds.Columns.MarketPlaceOwner')); ?></th>
                    <th><?php echo e(__('Models/Bonds.Columns.Products')); ?></th>
                    <th><?php echo e(__('Models/Bonds.Columns.ClientName')); ?></th>
                    <th><?php echo e(__('Models/Bonds.Columns.Quantity')); ?></th>
                    <th><?php echo e(__('Models/Bonds.Columns.BondDate')); ?></th>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $BondVouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $B): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($B->id); ?></td>
                            <td><?php echo e($B->MarketPlaceOwner); ?></td>
                            <td><?php echo e($B->Product->Name); ?></td>
                            <td><?php echo e($B->ClientName); ?></td>
                            <td><?php echo e($B->Quantity); ?></td>
                            <td><?php echo e($B->BondDate); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
            <div class="row text-center"><h1> لا يوجد اي سندات مضافة</h1></div>

 <?php endif; ?>


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
    <?php echo $ammountchart->script(); ?>

    <?php echo $voucherchart->script(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/Reports/bonds.blade.php ENDPATH**/ ?>