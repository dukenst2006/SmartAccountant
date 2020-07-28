<div class="table-responsive">

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th class="text-center"><?php echo e(__('Models/EmployeeSalaryInfos.EmployeeID')); ?></th>
            <th class="text-center"><?php echo e(__('Models/EmployeeSalaryInfos.Allowances')); ?></th>
            <th class="text-center"><?php echo e(__('Models/EmployeeSalaryInfos.Deductions')); ?></th>
            <th class="text-center"><?php echo e(__('Models/EmployeeSalaryInfos.Description')); ?></th>

            <th colspan="3"><?php echo e(__('Buttons.Action')); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employeeSalaryInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($employeeSalaryInfo->EmployeeID); ?></td>

                <td class="text-center"><?php echo e($employeeSalaryInfo->Allowances); ?></td>

                <td class="text-center"><?php echo e($employeeSalaryInfo->Deductions); ?></td>

                <td class="text-center"><?php echo e($employeeSalaryInfo->Description); ?></td>
                <td>
                    <form action="<?php echo e(route('admin.employeeSalaryInfos.destroy',$employeeSalaryInfo)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <a class="btn btn-primary" href="<?php echo e(route('admin.employeeSalaryInfos.edit',$employeeSalaryInfo)); ?>"><?php echo e(__('General.Edit')); ?></a>
                        <button type="submit" class="btn btn-danger"><?php echo e(__('Buttons.Delete')); ?></button>
                    </form>
                </td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


    </table>
</div>




<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/employee_salary_infos/table.blade.php ENDPATH**/ ?>