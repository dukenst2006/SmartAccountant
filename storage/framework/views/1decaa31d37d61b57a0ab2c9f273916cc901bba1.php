
<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <h4 class="col-12 text-center"><?php echo e(__("menu.EmployeesSalaries")); ?></h4>
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
                    <?php echo Form::label('File',__('General.File')); ?>

                    <?php echo Form::file('File' , ['class' => 'form-control' ]); ?>

                </div>
                <div class="form-group col-sm-12">
                    <?php echo Form::submit(__('General.Create'), ['class' => 'btn btn-primary']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <?php echo e(__("General.All")); ?>

            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td><?php echo e(__("Models/Marketplace.Address")); ?></td>
                            <td><?php echo e(__("General.Titles.Branch")); ?></td>
                            <td><?php echo e(__("General.File")); ?></td>
                            <td><?php echo e(__("General.About.Order")); ?></td>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/employee_salaries/index.blade.php ENDPATH**/ ?>