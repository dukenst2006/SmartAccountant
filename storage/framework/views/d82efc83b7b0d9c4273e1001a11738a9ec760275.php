
<?php $__env->startSection('title', 'Employees'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1><?php echo e(__('General.Titles.Employee')); ?></h1>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">



     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title"><?php echo e(__('General.Titles.Employee')); ?></h3>
            </div>

        <div class="col-12 justify-content-center">
            <div class="col-3">
                <img width="100%" src="<?php echo e(asset($employee->ProfileImage)); ?>">
            </div>
        </div>
         <div class="card-body" style="padding: 20px !important;">
             <a class="btn btn-primary m-2" href="<?php echo e(route('admin.SalaryInfos',$employee)); ?>">معلومات الراتب</a>

                 <form class="lye-emp" >
                    <?php echo $__env->make('admin.employees.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a href="<?php echo e(route('admin.employees.index')); ?>" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i> رجوع </a>
                </form>


            </div>



        </div>



    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/employees/show.blade.php ENDPATH**/ ?>