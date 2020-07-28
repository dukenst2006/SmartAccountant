
<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name', __('Models/Marketplace.Name')); ?>

    <?php echo Form::text('Name', null, ['class' => 'form-control']); ?>

</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Country', __('Models/Marketplace.Country')); ?>

    <?php echo Form::text('Country', null, ['class' => 'form-control']); ?>

</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('City', __('Models/Marketplace.City')); ?>

    <?php echo Form::text('City', null, ['class' => 'form-control']); ?>

</div>

<!-- Supervisorphonenumber Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('SupervisorPhoneNumber', __('Models/Marketplace.SupervisorPhoneNumber')); ?>

    <?php echo Form::text('SupervisorPhoneNumber', null, ['class' => 'form-control']); ?>

</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Address', __('Models/Marketplace.Address')); ?>

    <?php echo Form::text('Address', null, ['class' => 'form-control']); ?>

</div>

<!-- Taxnumber Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('TaxNumber', __('Models/Marketplace.TaxNumber')); ?>

    <?php echo Form::text('TaxNumber', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Email', __('Models/Marketplace.Email')); ?>

    <?php echo Form::email('Email', null, ['class' => 'form-control']); ?>

</div>



<!-- Safebalance Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('SafeBalance', __('Models/Marketplace.SafeBalance')); ?>

    <?php echo Form::number('SafeBalance', null, ['class' => 'form-control']); ?>

</div>

<!-- Companyregisterimage Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('CompanyRegisterImage', __('Models/Marketplace.CompanyRegisterImage')); ?>

    <?php echo Form::file('CompanyRegisterImage', ['class' => 'form-control']); ?>

</div>


<div class="form-group col-sm-6">
    <?php echo Form::label('Attachment', __('Models/Marketplace.Attachment')); ?>

    <?php echo Form::file('Attachment', ['class' => 'form-control']); ?>

</div>
<div class="form-group col-sm-6">
    <?php echo Form::label('CommercialRegister', __('Models/Marketplace.CommercialRegister')); ?>

    <?php echo Form::file('CommercialRegister', ['class' => 'form-control']); ?>

</div>
<div class="form-group col-sm-6">
    <?php echo Form::label('LeaseContract', __('Models/Marketplace.LeaseContract')); ?>

    <?php echo Form::file('LeaseContract', ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.marketplaces.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>
<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/marketplaces/fields.blade.php ENDPATH**/ ?>