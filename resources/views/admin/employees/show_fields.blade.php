<!-- Userid Field -->
<div class="form-group">
    {!! Form::label('UserID', 'ID - ' . __('General.Titles.Employee'))  . ":"!!}
    <p>{{ $employee->UserID }}</p>
</div>

<!-- Marketplaceid Field -->
<div class="form-group">
    {!! Form::label('MarketplaceID',  __('General.fields.Marketplaceid'))  . ":" !!}
    <p>{{ $employee->MarketplaceID }}</p>
</div>

<!-- Marketplaceownerid Field -->
<div class="form-group">
    {!! Form::label('MarketplaceOwnerID', __('General.fields.Marketplaceownerid'))  . ":" !!}
    <p>{{ $employee->MarketplaceOwnerID }}</p>
</div>

<!-- Nationality Field -->
<div class="form-group">
    {!! Form::label('Nationality', __('General.fields.Nationality'))   . ":" !!}
    <p>{{ $employee->Nationality }}</p>
</div>

<!-- Jobtitle Field -->
<div class="form-group">
    {!! Form::label('JobTitle', __('General.fields.Jobtitle'))   . ":" !!}
    <p>{{ $employee->JobTitle }}</p>
</div>

<!-- Nationalid Field -->
<div class="form-group">
    {!! Form::label('NationalID', __('General.fields.Nationalid'))   . ":"!!}
    <p>{{ $employee->NationalID }}</p>
</div>

<!-- Phonenumber Field -->
<div class="form-group">
    {!! Form::label('PhoneNumber', __('General.fields.Phonenumber'))   . ":" !!}
    <p>{{ $employee->PhoneNumber }}</p>
</div>

<!-- Profileimage Field -->
<div class="form-group">
    {!! Form::label('ProfileImage', __('General.fields.Profileimage'))   . ":" !!}
    <p>{{ $employee->ProfileImage }}</p>
</div>

<!-- Identityimage Field -->
<div class="form-group">
    {!! Form::label('IdentityImage', __('General.fields.Identityimage'))  . ":"  !!}
    <p>{{ $employee->IdentityImage }}</p>
</div>

<!-- Employmentcontractimage Field -->
<div class="form-group">
    {!! Form::label('EmploymentContractImage', __('General.fields.Employmentcontractimage'))  . ":"  !!}
    <p>{{ $employee->EmploymentContractImage }}</p>
</div>

<!-- Iban Field -->
<div class="form-group">
    {!! Form::label('IBAN', __('General.fields.Iban'))  . ":"  !!}
    <p>{{ $employee->IBAN }}</p>
</div>

<!-- Sex Field -->
<div class="form-group">
    {!! Form::label('Sex', __('General.fields.sex'))  . ":" !!}
    <p>{{ $employee->Sex }}</p>
</div>

<!-- Salary Field -->
<div class="form-group">
    {!! Form::label('Salary', __('General.fields.Salary'))  . ":"  !!}
    <p>{{ $employee->Salary }}</p>
</div>

