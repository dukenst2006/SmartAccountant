
<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name', 'الإسم:'); ?>

    <?php echo Form::text('Name', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.productCategories.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>
<?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/product_categories/fields.blade.php ENDPATH**/ ?>