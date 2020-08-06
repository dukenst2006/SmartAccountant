<?php $__env->startSection('title', 'الموظفين'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
    <div class="col-md-8 chart-modifications">




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
        <table class="table table-bordered m-3 text-center">
            <thead class="thead-light">
                <tr style="background-color: #053395b5 !important;color: #FFF">
                    <td>#</td>
                    <td><?php echo e(__('employee.name')); ?></td>
                    <td><?php echo e(__('Models/Employee.JobTitle')); ?></td>
                    <td><?php echo e(__('Models/Marketplace.Name')); ?></td>
                    <td><?php echo e(__('حالة الاتصال')); ?></td>
                    <td><?php echo e(__('اخر يوم حضور')); ?></td>
                    <td><?php echo e(__('وقت الدخول')); ?></td>
                    <td><?php echo e(__('وقت الخروج')); ?></td>
                    <td><?php echo e(__('عدد المبيعات')); ?></td>
                    <td><?php echo e(__('قيمة المبيعات')); ?></td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $employeesTable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $E): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($E->id); ?></td>
                        <td><?php echo e($E->User->Name); ?></td>
                        <td><?php echo e($E->JobTitle); ?></td>
                        <td><?php echo e($E->MarketPlace->Name); ?></td>
                        <td class="<?php echo e($E->user->CheckOnline() ? 'bg-success' : 'bg-danger'); ?>"><?php echo e($E->user->CheckOnline() ? 'متصل' : 'غير متصل'); ?></td>
                        <?php if($E->employeeSalaryInfos->where('PresenceAndDevotion','=','Present')->first() != null): ?>
                            <td><?php echo e($E->employeeSalaryInfos->where('PresenceAndDevotion','=','Present')->first()->created_at->format('m/d')); ?></td>
                            <td><?php echo e($E->employeeSalaryInfos->where('PresenceAndDevotion','=','Present')->first()->created_at->format('h:i')); ?></td>
                            <td><?php echo e('لم يحدد'); ?></td>
                        <?php else: ?>
                            <td colspan="3"><?php echo e('لم يحدد'); ?></td>
                        <?php endif; ?>
                        <td><?php echo e($E->invoices->count()); ?> فاتورة</td>
                        <td><?php echo e($E->invoices->sum('Paid')); ?> </td>
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