
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', __('Models/Supplier.Name').':') !!}
    <p>{{ $supplier->Name }}</p>
</div>

<!-- Company Field -->
<div class="form-group">
    {!! Form::label('Company', __('Models/Companies.Name').':') !!}
    <p>{{ $supplier->Company->Name }}</p>
</div>

<!-- Phonenumber Field -->
<div class="form-group">
    {!! Form::label('PhoneNumber', __('Models/Supplier.PhoneNumber').':') !!}
    <p>{{ $supplier->PhoneNumber }}</p>
</div>



<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', __('Models/Supplier.Description').':') !!}
    {!! Form::textarea('Description', $supplier->Description, ['class' => 'form-control']) !!}
</div>

