<!-- Userid Field -->
<div class="form-group">
    {!! Form::label('UserID', 'ID  المستخدم:') !!}
    <p>{{ $product->UserID }}</p>
</div>

<!-- MarketplaceID Field -->
<div class="form-group">
    {!! Form::label('MarketplaceID', 'ID السوق  :') !!}
    <p>{{ $product->MarketplaceID }}</p>
</div>

<!-- Productcategoryid Field -->
<div class="form-group">
    {!! Form::label('ProductCategoryID', ' : تصنيفات المنتجات الأصليه  ID  ') !!}
    <p>{{ $product->ProductCategoryID }}</p>
</div>

<!-- Productsubcategoryid Field -->
<div class="form-group">
    {!! Form::label('ProductSubCategoryID', ' ID  تصنيفات المنتجات الفرعية :') !!}
    <p>{{ $product->ProductSubCategoryID }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'الإسم :') !!}
    <p>{{ $product->Name }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('Quantity', 'الكمية :') !!}
    <p>{{ $product->Quantity }}</p>
</div>

<!-- Quantitytypeid Field -->
<div class="form-group">
    {!! Form::label('QuantityTypeID', ' ID نوع الكمبية  : ') !!}
    <p>{{ $product->QuantityTypeID }}</p>
</div>

<!-- Purchasingprice Field -->
<div class="form-group">
    {!! Form::label('PurchasingPrice', 'سعر الشراء:') !!}
    <p>{{ $product->PurchasingPrice }}</p>
</div>

<!-- Sellingprice Field -->
<div class="form-group">
    {!! Form::label('SellingPrice', 'سعر البيع:') !!}
    <p>{{ $product->SellingPrice }}</p>
</div>

<!-- Lowprice Field -->
<div class="form-group">
    {!! Form::label('LowPrice', 'اقل سعر:') !!}
    <p>{{ $product->LowPrice }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('Image', 'الصورة:') !!}
    <p>{{ $product->Image }}</p>
</div>

<!-- Expirydate Field -->
<div class="form-group">
    {!! Form::label('ExpiryDate', 'تاريخ الإنتهاء:') !!}
    <p>{{ $product->ExpiryDate }}</p>
</div>

<!-- Barcode Field -->
<div class="form-group">
    {!! Form::label('Barcode', 'الرمز الشرطى:') !!}
    <p>{{ $product->Barcode }}</p>
</div>

<!-- Unlimitedquantity Field -->
<div class="form-group">
    {!! Form::label('UnlimitedQuantity', 'كمية غير محدودة:') !!}
    <p>{{ $product->UnlimitedQuantity }}</p>
</div>

