<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <h4 class="col-12 text-center"> مرتبات الموظفين</h4>
        <div class="card">
            <div class="card-header">
                انشاء
            </div>
            <div class="card-body">
                <?php echo Form::open(['route' => 'admin.EmployeeSalary.store','files'=> true]); ?>

                <div class="form-group col-sm-12">
                    <?php echo Form::label('Name',__('/Models/User.Name')); ?>

                    <?php echo Form::text('Name', null , ['class' => 'form-control' ]); ?>

                </div>
                <div class="form-group col-sm-12">
                    <?php echo Form::label('MarketPlaceID',__('menu.Marketplaces')); ?>

                    <?php echo Form::select('MarketPlaceID', $MarketPlaces ,null , ['class' => 'form-control' ]); ?>

                </div>
                <div class="form-group col-sm-12">
                    <?php echo Form::label('File',"الملف"); ?>

                    <?php echo Form::file('File' , ['class' => 'form-control' ]); ?>

                </div>
                <div class="form-group col-sm-12">
                    <?php echo Form::submit(__('employee.create'), ['class' => 'btn btn-primary']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                الكل
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>العنوان</td>
                            <td>الفرع</td>
                            <td>الملف</td>
                            <td>تحكم</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $EmployeeSalaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($salary->Name); ?></td>
                                <td><?php echo e($salary->marketplace->Name); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.EmployeeSalary.show',$salary)); ?>" target="_blank" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('admin.EmployeeSalary.destroy',$salary)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/employee_salaries/index.blade.php ENDPATH**/ ?>