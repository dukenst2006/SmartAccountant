
<!-- Productcategoryid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProductCategoryID',  __('Models/Product.ProductCategoryID')) !!}
    {!! Form::select('ProductCategoryID',$product_categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Productsubcategoryid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProductSubCategoryID',  __('Models/Product.ProductSubCategoryID')) !!}
    {!! Form::select('ProductSubCategoryID',$product_sub_categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name',  __('Models/Product.Name')) !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Quantity',  __('Models/Product.Quantity')) !!}
    {!! Form::number('Quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantitytypeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('QuantityTypeID',  __('Models/Product.QuantityTypeID')) !!}
    {!! Form::select('QuantityTypeID', $quantitytypes,null, ['class' => 'form-control']) !!}
</div>

<!-- Purchasingprice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PurchasingPrice',  __('Models/Product.PurchasingPrice')) !!}
    {!! Form::number('PurchasingPrice', null, ['class' => 'form-control']) !!}
</div>
<!-- ExcludeFromVAT Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExcludeFromVAT',  __('General.Product.ExcludeFromVAT')) !!}
    {!! Form::checkbox('ExcludeFromVAT', 1,null, ['class' => '']) !!}
</div>

<!-- Sellingprice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SellingPrice',  __('Models/Product.SellingPrice')) !!}
    {!! Form::number('SellingPrice', null, ['class' => 'form-control']) !!}
</div>

<!-- Lowprice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LowPrice',  __('Models/Product.LowPrice')) !!}
    {!! Form::number('LowPrice', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Image',  __('Models/Product.Image')) !!}
    {!! Form::file('Image', ['class' => 'form-control']) !!}
</div>

<!-- Expirydate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExpiryDate',  __('Models/Product.ExpiryDate')) !!}
    {!! Form::date('ExpiryDate', null, ['class' => 'form-control','id'=>'ExpiryDate']) !!}

    {!! Form::label('UnlimitedQuantity',  __('Models/Product.CanExpired')) !!}
    <label class="checkbox-inline">
        {!! Form::hidden('CanExpired', 0) !!}
        {!! Form::checkbox('CanExpired', '1', null) !!}
    </label>
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ExpiryDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Barcode',  __('Models/Product.Barcode')) !!}
    {!! Form::text('Barcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Unlimitedquantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnlimitedQuantity',  __('Models/Product.UnlimitedQuantity')) !!}
    <label class="checkbox-inline">
        {!! Form::hidden('UnlimitedQuantity', 0) !!}
        {!! Form::checkbox('UnlimitedQuantity', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.products.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
