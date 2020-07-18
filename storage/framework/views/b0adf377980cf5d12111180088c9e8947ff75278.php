<!-- UserName Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name',__('/Models/User.Name')); ?>

    <?php echo Form::text('Name', $supervisor->User->Name?? '' , ['class' => 'form-control' ]); ?>

</div>

<!-- UserPassword Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Password',__('/Models/User.Password')); ?>

    <?php echo Form::text('Password', null ,['class' => 'form-control' ,'minlength'=>'8']); ?>

</div>


<!-- UserEmail Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Email',__('/Models/User.Email')); ?>

    <?php echo Form::email('Email', $supervisor->User->Email?? '' , ['class' => 'form-control']); ?>

</div>

<!-- Jobtitle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('JobTitle', __('Models/Supervisor.JobTitle')); ?>

    <?php echo Form::text('JobTitle', null, ['class' => 'form-control']); ?>

</div>



<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('PhoneNumber',  __('Models/Supervisor.PhoneNumber')); ?>

    <?php echo Form::text('PhoneNumber', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.supervisors.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>

<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/supervisors/fields.blade.php ENDPATH**/ ?>