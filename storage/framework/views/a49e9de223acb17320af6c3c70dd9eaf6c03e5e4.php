<?php $__env->startSection('title', 'Stocks'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
    <div class="col-md-8">




            <div id="chart">

                <?php echo $employeechart->container(); ?>


            </div>
        <div class="card p-3">
            <form action="<?php echo e(route('admin.employeesreport')); ?>" method="get">
                <div class="row">
                    <div class="form-group col-4">
                        <label for=""><?php echo e(__('money.from')); ?></label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label for=""><?php echo e(__('Models/Marketplace.Name')); ?></label>
                        <select name="marketID" class="form-control">
                            <option value=""><?php echo e(__('General.All')); ?></option>
                            <?php $__currentLoopData = @App\Models\Marketplace::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $M): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($M->id); ?>"><?php echo e($M->Name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label for=""><?php echo e(__('money.to')); ?></label>
                        <input type="date" name="to" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><?php echo e(__('money.search')); ?></button>
            </form>
        </div>
        <table class="table table-bordered m-3">
            <thead class="thead-light">
                <tr>
                    <td>#</td>
                    <td><?php echo e(__('employee.name')); ?></td>
                    <td><?php echo e(__('Models/Employee.JobTitle')); ?></td>
                    <td><?php echo e(__('Models/Marketplace.Name')); ?></td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $employeesTable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $E): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($E->ID); ?></td>
                        <td><?php echo e($E->User->Name); ?></td>
                        <td><?php echo e($E->JobTitle); ?></td>
                        <td><?php echo e($E->MarketPlace->Name); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

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
    <?php echo $employeechart->script(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/Reports/employees.blade.php ENDPATH**/ ?>