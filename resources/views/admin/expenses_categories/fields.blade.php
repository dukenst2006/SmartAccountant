<!-- Marketplacesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplacesID', __('menu.Marketplaces')) !!}
    {!! Form::select('MarketplacesID',$marketplaces, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.expensesCategories.index') }}" class="btn btn-default">Cancel</a>
</div>
