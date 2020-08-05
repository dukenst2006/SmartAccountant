<!-- MarketplaceID Field -->
<div class="form-group">
    {!! Form::label('MarketplaceID', __('Models/Marketplace.Name')) !!}
    <p>{{ $expense->MarketplaceID }}</p>
</div>

<!-- Expensescategoriesid Field -->
<div class="form-group">
    {!! Form::label('ExpensesCategoriesID', __('Models/ExpensesCategory.Name')) !!}
    <p>{{ $expense->ExpensesCategoriesID }}</p>
</div>

<!-- Expensessubcategoriesid Field -->
<div class="form-group">
    {!! Form::label('ExpensesSubCategoriesID', __('Models/ExpensesSubCategory.Name')) !!}
    <p>{{ $expense->ExpensesSubCategoriesID }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', __('Models/Expenses.Name')) !!}
    <p>{{ $expense->Name }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('Price', __('Models/Expenses.Price')) !!}
    <p>{{ $expense->Price }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description',__('Models/Expenses.Description')) !!}
    <p>{{ $expense->Description }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('Date',__('Models/Expenses.Date')) !!}
    <p>{{ $expense->Date }}</p>
</div>

