<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name', __('Models/Supplier.Name').':'); ?>

    <?php echo Form::text('Name', null, ['class' => 'form-control']); ?>

</div>

<!-- Company Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Company', __('Models/Companies.Name').':'); ?>

    <?php echo Form::select('CompanyID', $companies , null , ['class' => 'form-control']); ?>



</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('PhoneNumber', __('Models/Supplier.PhoneNumber').':'); ?>

    <?php echo Form::text('PhoneNumber', null, ['class' => 'form-control']); ?>

</div>


<!-- Description Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Description', __('Models/Supplier.Description').':'); ?>

    <?php echo Form::textarea('Description', 'Description', ['class' => 'form-control']); ?>

</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit(__('Buttons.Save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.suppliers.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>
<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/suppliers/fields.blade.php ENDPATH**/ ?>