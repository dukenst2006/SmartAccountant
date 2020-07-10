<!-- Marketplacesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplacesID', __('Models/Marketplace.Name')) !!}
    {!! Form::select('MarketplacesID',$market_places, null, ['class' => 'form-control']) !!}
</div>

<!-- Expensescategoriesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExpensesCategoriesID', __('Models/ExpensesCategory.Name')) !!}
    {!! Form::select('ExpensesCategoriesID',$categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Expensessubcategoriesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExpensesSubCategoriesID', __('Models/ExpensesSubCategory.Name')) !!}
    {!! Form::select('ExpensesSubCategoriesID',$sub_categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', __('Models/Expenses.Name')) !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', __('Models/Expenses.Price')) !!}
    {!! Form::number('Price', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description',__('Models/Expenses.Description')) !!}
    {!! Form::textarea('Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date',__('Models/Expenses.Date')) !!}
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
