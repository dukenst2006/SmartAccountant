<!-- UserName Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name',__('/Models/User.Name')); ?>

    <?php echo Form::text('Name', $employee->User->Name?? '' , ['class' => 'form-control' ]); ?>

</div>


<!-- UserPassword Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Password',__('/Models/User.Password')); ?>

    <?php echo Form::text('Password', null ,['class' => 'form-control' ,'minlength'=>'8']); ?>

</div>


<!-- UserEmail Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Email',__('/Models/User.Email')); ?>

    <?php echo Form::email('Email', $employee->User->Email?? '' , ['class' => 'form-control']); ?>

</div>


<!-- Marketplaceid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('MarketplaceID', __('Models/Marketplace.Name')); ?>

    <?php echo Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']); ?>

</div>



<!-- Nationality Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Nationality', __('Models/Employee.Nationality')); ?>

    <?php echo Form::text('Nationality', null, ['class' => 'form-control']); ?>

</div>

<!-- Jobtitle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('JobTitle', __('Models/Employee.JobTitle')); ?>

    <?php echo Form::text('JobTitle', null, ['class' => 'form-control']); ?>

</div>

<!-- Nationalid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('NationalID', __('Models/Employee.IdentityImage')); ?>

    <?php echo Form::text('NationalID', null, ['class' => 'form-control']); ?>

</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('PhoneNumber', __('Models/Employee.PhoneNumber')); ?>

    <?php echo Form::text('PhoneNumber', null, ['class' => 'form-control']); ?>

</div>

<!-- Profileimage Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ProfileImage', __('Models/Employee.ProfileImage')); ?>

    <?php echo Form::file('ProfileImage', ['class' => 'form-control']); ?>

</div>

<!-- Identityimage Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('IdentityImage', __('Models/Employee.IdentityImage')); ?>

    <?php echo Form::file('IdentityImage', ['class' => 'form-control']); ?>

</div>

<!-- Employmentcontractimage Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('EmploymentContractImage', __('Models/Employee.EmploymentContractImage')); ?>

    <?php echo Form::file('EmploymentContractImage', ['class' => 'form-control']); ?>

</div>

<!-- Iban Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('IBAN', __('Models/Employee.IBAN')); ?>

    <?php echo Form::text('IBAN', null, ['class' => 'form-control']); ?>

</div>

<!-- Sex Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Sex', __('Models/Employee.Sex')); ?>


    <?php echo Form::select('Sex', ['ذكر' => 'ذكر', 'اثني' => 'اثني', 'غير ذلك' => 'غير ذلك'], 'ذكر', ['class' => 'form-control']); ?>

</div>

<!-- Salary Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Salary', __('Models/Employee.Salary')); ?>

    <?php echo Form::number('Salary', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit(__('Buttons.Create'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.employees.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>
<?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/employees/fields.blade.php ENDPATH**/ ?>