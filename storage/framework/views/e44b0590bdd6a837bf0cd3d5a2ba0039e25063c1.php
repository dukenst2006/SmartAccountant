<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name', __('Models/Companies.Name').':'); ?>

    <?php echo Form::text('Name', null, ['class' => 'form-control']); ?>

</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Address', __('Models/Companies.Address').':'); ?>

    <?php echo Form::text('Address', null, ['class' => 'form-control']); ?>

</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Country', __('Models/Companies.Country').':'); ?>

    <?php echo Form::text('Country', null, ['class' => 'form-control']); ?>

</div>
<!-- Country Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('IBAN', __('General.Bank Account Number').':'); ?>

    <?php echo Form::text('IBAN', null, ['class' => 'form-control']); ?>

</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('PhoneNumber', __('Models/Companies.PhoneNumber').':'); ?>

    <?php echo Form::text('PhoneNumber', null, ['class' => 'form-control']); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Description', __('Models/Companies.Description').':'); ?>

    <?php echo Form::textarea('Description', 'Description', ['class' => 'form-control']); ?>


</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit(__('Buttons.Save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.companies.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>
<?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/companies/fields.blade.php ENDPATH**/ ?>