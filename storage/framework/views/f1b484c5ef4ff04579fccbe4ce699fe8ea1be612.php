<!-- Userid Field -->
<div class="form-group">
    <?php echo Form::label('UserID', 'ID - ' . __('General.Titles.Employee'))  . ":"; ?>

    <p><?php echo e($employee->UserID); ?></p>
</div>

<!-- Marketplaceid Field -->
<div class="form-group">
    <?php echo Form::label('MarketplaceID',  __('General.fields.Marketplaceid'))  . ":"; ?>

    <p><?php echo e($employee->MarketplaceID); ?></p>
</div>

<!-- Marketplaceownerid Field -->
<div class="form-group">
    <?php echo Form::label('MarketplaceOwnerID', __('General.fields.Marketplaceownerid'))  . ":"; ?>

    <p><?php echo e($employee->MarketplaceOwnerID); ?></p>
</div>

<!-- Nationality Field -->
<div class="form-group">
    <?php echo Form::label('Nationality', __('General.fields.Nationality'))   . ":"; ?>

    <p><?php echo e($employee->Nationality); ?></p>
</div>

<!-- Jobtitle Field -->
<div class="form-group">
    <?php echo Form::label('JobTitle', __('General.fields.Jobtitle'))   . ":"; ?>

    <p><?php echo e($employee->JobTitle); ?></p>
</div>

<!-- Nationalid Field -->
<div class="form-group">
    <?php echo Form::label('NationalID', __('General.fields.Nationalid'))   . ":"; ?>

    <p><?php echo e($employee->NationalID); ?></p>
</div>

<!-- Phonenumber Field -->
<div class="form-group">
    <?php echo Form::label('PhoneNumber', __('General.fields.Phonenumber'))   . ":"; ?>

    <p><?php echo e($employee->PhoneNumber); ?></p>
</div>

<!-- Profileimage Field -->
<div class="form-group">
    <?php echo Form::label('ProfileImage', __('General.fields.Profileimage'))   . ":"; ?>

    <p><?php echo e($employee->ProfileImage); ?></p>
</div>

<!-- Identityimage Field -->
<div class="form-group">
    <?php echo Form::label('IdentityImage', __('General.fields.Identityimage'))  . ":"; ?>

    <p><?php echo e($employee->IdentityImage); ?></p>
</div>

<!-- Employmentcontractimage Field -->
<div class="form-group">
    <?php echo Form::label('EmploymentContractImage', __('General.fields.Employmentcontractimage'))  . ":"; ?>

    <p><?php echo e($employee->EmploymentContractImage); ?></p>
</div>

<!-- Iban Field -->
<div class="form-group">
    <?php echo Form::label('IBAN', __('General.fields.Iban'))  . ":"; ?>

    <p><?php echo e($employee->IBAN); ?></p>
</div>

<!-- Sex Field -->
<div class="form-group">
    <?php echo Form::label('Sex', __('General.fields.sex'))  . ":"; ?>

    <p><?php echo e($employee->Sex); ?></p>
</div>

<!-- Salary Field -->
<div class="form-group">
    <?php echo Form::label('Salary', __('General.fields.Salary'))  . ":"; ?>

    <p><?php echo e($employee->Salary); ?></p>
</div>

<?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/employees/show_fields.blade.php ENDPATH**/ ?>