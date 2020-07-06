<!-- Marketplaceownerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplaceOwnerID', 'Marketplaceownerid:') !!}
    {!! Form::number('MarketplaceOwnerID', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Country', 'Country:') !!}
    {!! Form::text('Country', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('City', 'City:') !!}
    {!! Form::text('City', null, ['class' => 'form-control']) !!}
</div>

<!-- Supervisorphonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SupervisorPhoneNumber', 'Supervisorphonenumber:') !!}
    {!! Form::text('SupervisorPhoneNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TaxNumber', 'Taxnumber:') !!}
    {!! Form::text('TaxNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Latitude', 'Latitude:') !!}
    {!! Form::text('Latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Longitude', 'Longitude:') !!}
    {!! Form::text('Longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Safebalance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SafeBalance', 'Safebalance:') !!}
    {!! Form::number('SafeBalance', null, ['class' => 'form-control']) !!}
</div>

<!-- Companyregisterimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CompanyRegisterImage', 'Companyregisterimage:') !!}
    {!! Form::text('CompanyRegisterImage', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Logo', 'Logo:') !!}
    {!! Form::text('Logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.marketplaces.index') }}" class="btn btn-default">Cancel</a>
</div>
