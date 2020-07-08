<!-- Expensescategoryid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ExpensesCategoryID', 'Expensescategory:') !!}
    {!! Form::select('ExpensesCategoryID',$categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.expensesSubCategories.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
