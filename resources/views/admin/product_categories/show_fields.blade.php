<!-- MarketplaceID Field -->
<div class="form-group">
    {!! Form::label('MarketplaceID', __('Models/Product.MarketplaceID') .':') !!}
    <p>{{ $productCategory->MarketplaceID }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $productCategory->Name }}</p>
</div>

