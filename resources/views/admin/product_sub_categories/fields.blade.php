<!-- Productcategoryid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProductCategoryID', 'Productcategoryid:') !!}
    {!! Form::number('ProductCategoryID', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.productSubCategories.index') }}" class="btn btn-default">Cancel</a>
</div>
