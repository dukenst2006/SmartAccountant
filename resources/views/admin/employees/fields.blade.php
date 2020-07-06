<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UserID', 'Userid:') !!}
    {!! Form::number('UserID', null, ['class' => 'form-control']) !!}
</div>

<!-- Marketplaceid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplaceID', 'Marketplaceid:') !!}
    {!! Form::number('MarketplaceID', null, ['class' => 'form-control']) !!}
</div>

<!-- Marketplaceownerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplaceOwnerID', 'Marketplaceownerid:') !!}
    {!! Form::number('MarketplaceOwnerID', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nationality', 'Nationality:') !!}
    {!! Form::text('Nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Jobtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('JobTitle', 'Jobtitle:') !!}
    {!! Form::text('JobTitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationalid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NationalID', 'Nationalid:') !!}
    {!! Form::text('NationalID', null, ['class' => 'form-control']) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PhoneNumber', 'Phonenumber:') !!}
    {!! Form::text('PhoneNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Profileimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProfileImage', 'Profileimage:') !!}
    {!! Form::text('ProfileImage', null, ['class' => 'form-control']) !!}
</div>

<!-- Identityimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IdentityImage', 'Identityimage:') !!}
    {!! Form::text('IdentityImage', null, ['class' => 'form-control']) !!}
</div>

<!-- Employmentcontractimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EmploymentContractImage', 'Employmentcontractimage:') !!}
    {!! Form::text('EmploymentContractImage', null, ['class' => 'form-control']) !!}
</div>

<!-- Iban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IBAN', 'Iban:') !!}
    {!! Form::text('IBAN', null, ['class' => 'form-control']) !!}
</div>

<!-- Sex Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sex', 'Sex:') !!}
    {!! Form::text('Sex', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Salary', 'Salary:') !!}
    {!! Form::number('Salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.employees.index') }}" class="btn btn-default">Cancel</a>
</div>
