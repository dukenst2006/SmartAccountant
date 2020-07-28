<?php $__env->startSection('title', 'حضور وغياب الموظفين'); ?>

<?php $__env->startSection('content_header'); ?>
    <a href="<?php echo e(route('admin.employees.show',$employee)); ?>">
        <h1 class="mb-3"><i class="fas fa-file-invoice-dollar"></i> <?php echo e($employee->User->Name); ?></h1>
    </a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

        <div class="card m-2">
            <div class="card-header">
                <?php echo e(__('General.Create')); ?>

            </div>
            <div class="card-body p-2">
                <form class="p-3" action="<?php echo e(route('admin.employeeSalaryInfos.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="EmployeeID" value="<?php echo e($employee->id); ?>">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for=""><?php echo e(__('Models/EmployeeSalaryInfos.Allowances')); ?></label>
                            <input type="number" class="form-control" value="0" name="Allowances">
                        </div>
                        <div class="form-group col-6">
                            <label for=""><?php echo e(__('Models/EmployeeSalaryInfos.Deductions')); ?></label>
                            <input type="number" class="form-control" value="0" name="Deductions">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><?php echo e(__('Models/EmployeeSalaryInfos.Description')); ?></label>
                        <textarea name="Description" id="" class="form-control" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success"><?php echo e(__('General.Create')); ?></button>
                </form>
            </div>
        </div>


        <div class="main-tbl" style="overflow:auto;">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.employee_salary_infos.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/employee_salary_infos/index.blade.php ENDPATH**/ ?>