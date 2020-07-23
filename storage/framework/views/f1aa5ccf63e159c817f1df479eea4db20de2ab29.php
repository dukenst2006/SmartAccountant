<!-- MarketplaceID Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('MarketplaceID', __('Models/Marketplace.Name')); ?>

    <?php echo Form::select('MarketplaceID',$market_places, null, ['class' => 'form-control']); ?>

</div>

<!-- Expensescategoriesid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ExpensesCategoriesID', __('Models/ExpensesCategory.Name')); ?>

    <?php echo Form::select('ExpensesCategoriesID',$categories, null, ['class' => 'form-control']); ?>

</div>

<!-- Expensessubcategoriesid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ExpensesSubCategoriesID', __('Models/ExpensesSubCategory.Name')); ?>

    <?php echo Form::select('ExpensesSubCategoriesID',$sub_categories, null, ['class' => 'form-control']); ?>

</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name', __('Models/Expenses.Name')); ?>

    <?php echo Form::text('Name', null, ['class' => 'form-control']); ?>

</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Price', __('Models/Expenses.Price')); ?>

    <?php echo Form::number('Price', null, ['class' => 'form-control']); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Description',__('Models/Expenses.Description')); ?>

    <?php echo Form::textarea('Description', null, ['class' => 'form-control']); ?>

</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Date',__('Models/Expenses.Date')); ?>

    <?php echo Form::date('Date', null, ['class' => 'form-control','id'=>'Date']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.expenses.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>
<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/expenses/fields.blade.php ENDPATH**/ ?>