<!-- Marketplacesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplacesID', 'Marketplacesid:') !!}
    {!! Form::number('MarketplacesID', null, ['class' => 'form-control']) !!}
</div>

<!-- Expensescategoriesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExpensesCategoriesID', 'Expensescategoriesid:') !!}
    {!! Form::number('ExpensesCategoriesID', null, ['class' => 'form-control']) !!}
</div>

<!-- Expensessubcategoriesid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExpensesSubCategoriesID', 'Expensessubcategoriesid:') !!}
    {!! Form::number('ExpensesSubCategoriesID', null, ['class' => 'form-control']) !!}
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
    {!! Form::label('Date', 'Date:') !!}
    {!! Form::text('Date', null, ['class' => 'form-control','id'=>'Date']) !!}
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.expenses.index') }}" class="btn btn-default">Cancel</a>
</div>
