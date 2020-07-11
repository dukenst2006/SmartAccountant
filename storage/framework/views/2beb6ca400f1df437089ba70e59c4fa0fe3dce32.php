<!-- Marketplacesid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('MarketplacesID', 'Marketplaces:'); ?>

    <?php echo Form::select('MarketplacesID',$marketplaces, null, ['class' => 'form-control']); ?>

</div>

<!-- Productcategoryid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ProductCategoryID', 'Productcategory:'); ?>

    <?php echo Form::select('ProductCategoryID',$product_categories, null, ['class' => 'form-control']); ?>

</div>

<!-- Productsubcategoryid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ProductSubCategoryID', 'Productsubcategory:'); ?>

    <?php echo Form::select('ProductSubCategoryID',$product_sub_categories, null, ['class' => 'form-control']); ?>

</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name', 'Name:'); ?>

    <?php echo Form::text('Name', null, ['class' => 'form-control']); ?>

</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Quantity', 'Quantity:'); ?>

    <?php echo Form::number('Quantity', null, ['class' => 'form-control']); ?>

</div>

<!-- Quantitytypeid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('QuantityTypeID', 'Quantitytypeid:'); ?>

    <?php echo Form::select('QuantityTypeID', $quantitytypes,null, ['class' => 'form-control']); ?>

</div>

<!-- Purchasingprice Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('PurchasingPrice', 'Purchasingprice:'); ?>

    <?php echo Form::number('PurchasingPrice', null, ['class' => 'form-control']); ?>

</div>

<!-- Sellingprice Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('SellingPrice', 'Sellingprice:'); ?>

    <?php echo Form::number('SellingPrice', null, ['class' => 'form-control']); ?>

</div>

<!-- Lowprice Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('LowPrice', 'Lowprice:'); ?>

    <?php echo Form::number('LowPrice', null, ['class' => 'form-control']); ?>

</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Image', 'Image:'); ?>

    <?php echo Form::file('Image', ['class' => 'form-control']); ?>

</div>

<!-- Expirydate Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ExpiryDate', 'Expirydate:'); ?>

    <?php echo Form::text('ExpiryDate', null, ['class' => 'form-control','id'=>'ExpiryDate']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#ExpiryDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Barcode', 'Barcode:'); ?>

    <?php echo Form::text('Barcode', null, ['class' => 'form-control']); ?>

</div>

<!-- Unlimitedquantity Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('UnlimitedQuantity', 'Unlimitedquantity:'); ?>

    <label class="checkbox-inline">
        <?php echo Form::hidden('UnlimitedQuantity', 0); ?>

        <?php echo Form::checkbox('UnlimitedQuantity', '1', null); ?>

    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>
<?php /**PATH F:\Laravel-Projects\Smart Accountant\resources\views/admin/products/fields.blade.php ENDPATH**/ ?>