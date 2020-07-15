<?php $__env->startSection('title', 'Companies'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>
        <?php echo e(__("General.Titles.Companies")); ?>

    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="row justify-content-center">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                <h3 class="card-title"><?php echo e(__("General.Edit")); ?></h3>

            </div>
            <div class="card-body">

                <?php echo Form::model($company, ['route' => ['admin.companies.update', $company->id], 'method' => 'patch']); ?>


                <?php echo $__env->make('admin.companies.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/companies/edit.blade.php ENDPATH**/ ?>