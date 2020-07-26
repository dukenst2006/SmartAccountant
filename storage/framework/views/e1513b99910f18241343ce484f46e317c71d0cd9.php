
<!-- Productcategoryid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ProductCategoryID',  __('Models/Product.ProductCategoryID')); ?>

    <?php echo Form::select('ProductCategoryID',$product_categories, null, ['class' => 'form-control']); ?>

</div>

<!-- Productsubcategoryid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ProductSubCategoryID',  __('Models/Product.ProductSubCategoryID')); ?>

    <?php echo Form::select('ProductSubCategoryID',$product_sub_categories, null, ['class' => 'form-control']); ?>

</div>

<!-- Marketplaceid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('MarketplaceID', __('Models/Marketplace.Name')); ?>

    <?php echo Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']); ?>

</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Name',  __('Models/Product.Name')); ?>

    <?php echo Form::text('Name', null, ['class' => 'form-control']); ?>

</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Quantity',  __('Models/Product.Quantity')); ?>

    <?php echo Form::number('Quantity', null, ['class' => 'form-control']); ?>

</div>

<!-- Quantitytypeid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('QuantityTypeID',  __('Models/Product.QuantityTypeID')); ?>

    <?php echo Form::select('QuantityTypeID', $quantitytypes,null, ['class' => 'form-control']); ?>

</div>

<!-- Purchasingprice Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('PurchasingPrice',  __('Models/Product.PurchasingPrice')); ?>

    <?php echo Form::number('PurchasingPrice', null, ['class' => 'form-control']); ?>

</div>


<!-- Sellingprice Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('SellingPrice',  __('Models/Product.SellingPrice')); ?>

    <?php echo Form::number('SellingPrice', null, ['class' => 'form-control']); ?>

</div>

<!-- Lowprice Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('LowPrice',  __('Models/Product.LowPrice')); ?>

    <?php echo Form::number('LowPrice', null, ['class' => 'form-control']); ?>

</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Image',  __('Models/Product.Image')); ?>

    <?php echo Form::file('Image', ['class' => 'form-control']); ?>

</div>
<!-- Barcode Field -->
<div class="form-group col-sm-6   ">
    <?php echo Form::label('Barcode',  __('Models/Product.Barcode')); ?>

    <?php echo Form::text('Barcode', null, ['class' => 'form-control']); ?>

</div>
<!-- Expirydate Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ExpiryDate',  __('Models/Product.ExpiryDate')); ?>

    <?php echo Form::date('ExpiryDate', null, ['class' => 'form-control','id'=>'ExpiryDate']); ?>


</div>

<!-- Unlimitedquantity Field -->
<div class="form-group col-sm-12 mt-2">

    <label class="checkbox-inline">
        <?php echo Form::hidden('CanExpired', 0); ?>

        <?php echo Form::checkbox('CanExpired', '1', null); ?>

    </label>
    <?php echo Form::label('UnlimitedQuantity',  __('Models/Product.CanExpired')); ?>


</div>
<div class="form-group col-sm-12">
    <label class="checkbox-inline">
        <?php echo Form::hidden('UnlimitedQuantity', 0); ?>

        <?php echo Form::checkbox('UnlimitedQuantity', '1', null); ?>

    </label>
    <?php echo Form::label('UnlimitedQuantity',  __('Models/Product.UnlimitedQuantity')); ?>


</div>

<!-- ExcludeFromVAT Field -->
<div class="form-group col-sm-12">
    <?php echo Form::checkbox('ExcludeFromVAT', 1,null, ['class' => '']); ?>

    <?php echo Form::label('ExcludeFromVAT',  __('General.Product.ExcludeFromVAT')); ?>


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




<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-default"><?php echo e(__('Buttons.Cancel')); ?></a>
</div>
<?php /**PATH D:\xampp\htdocs\SmartAccountant\resources\views/admin/products/fields.blade.php ENDPATH**/ ?>