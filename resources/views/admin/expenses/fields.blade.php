<!-- Marketplacesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplacesID', __('menu.Marketplaces')) !!}
    {!! Form::select('MarketplacesID',$market_places, null, ['class' => 'form-control']) !!}
</div>

<!-- Expensescategoriesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExpensesCategoriesID', 'Expensescategoriesid:') !!}
    {!! Form::select('ExpensesCategoriesID',$categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Expensessubcategoriesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExpensesSubCategoriesID', 'Expensessubcategoriesid:') !!}
    {!! Form::select('ExpensesSubCategoriesID',$sub_categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::number('Price', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date', __('money.choose date')) !!}
    {!! Form::date('Date', null, ['class' => 'form-control','id'=>'Date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.expenses.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
