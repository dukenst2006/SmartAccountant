<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', __('models/companies.fields.Name').':') !!}
    <p>{{ $company->Name }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('Address', __('models/companies.fields.Address').':') !!}
    <p>{{ $company->Address }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('Country', __('models/companies.fields.Country').':') !!}
    <p>{{ $company->Country }}</p>
</div>

<!-- Phonenumber Field -->
<div class="form-group">
    {!! Form::label('PhoneNumber', __('models/companies.fields.PhoneNumber').':') !!}
    <p>{{ $company->PhoneNumber }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', __('models/companies.fields.Description').':') !!}
    <p>{{ $company->Description }}</p>
</div>

