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
                    <form class="p-3" action="<?php echo e(route('admin.expensesreport')); ?>" method="get">
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
                        <button type="submit" class="btn btn-success"><?php echo e(__('بحث')); ?></button>
                    </form>
                </div>
            </div>


            <div id="chart">

                <?php echo $expensechart->container(); ?>


            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo e(__('Models/Expenses.Price')); ?></th>
                        <th><?php echo e(__('Models/Expenses.Date')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $expensesTable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $E): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($E->ID); ?></td>
                            <td><?php echo e($E->Price); ?></td>
                            <td><?php echo e($E->Date); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($expensesTable->links()); ?>

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
    <?php echo $expensechart->script(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/Reports/expenses.blade.php ENDPATH**/ ?>