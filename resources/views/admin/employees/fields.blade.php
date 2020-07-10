<!-- UserName Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name',__('/Models/User.Name')) !!}
    {!! Form::text('Name', $employee->User->Name?? '' , ['class' => 'form-control' ]) !!}
</div>

<!-- UserPassword Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Password',__('/Models/User.Password')) !!}
    {!! Form::text('Password', null ,['class' => 'form-control' ,'minlength'=>'8']) !!}
</div>


<!-- UserEmail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email',__('/Models/User.Email')) !!}
    {!! Form::email('Email', $employee->User->Email?? '' , ['class' => 'form-control']) !!}
</div>



<!-- Marketplaceid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplaceID', __('Models/Marketplace.Name')) !!}
    {!! Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']) !!}
</div>


<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nationality', __('Models/Employee.Nationality')) !!}
    {!! Form::text('Nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Jobtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('JobTitle', __('Models/Employee.JobTitle')) !!}
    {!! Form::text('JobTitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationalid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NationalID', __('Models/Employee.IdentityImage')) !!}
    {!! Form::text('NationalID', null, ['class' => 'form-control']) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PhoneNumber', __('Models/Employee.PhoneNumber')) !!}
    {!! Form::text('PhoneNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Profileimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProfileImage', __('Models/Employee.ProfileImage')) !!}
    {!! Form::file('ProfileImage', ['class' => 'form-control']) !!}
</div>

<!-- Identityimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IdentityImage', __('Models/Employee.IdentityImage')) !!}
    {!! Form::file('IdentityImage', ['class' => 'form-control']) !!}
</div>

<!-- Employmentcontractimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EmploymentContractImage', __('Models/Employee.EmploymentContractImage')) !!}
    {!! Form::file('EmploymentContractImage', ['class' => 'form-control']) !!}
</div>

<!-- Iban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IBAN', __('Models/Employee.IBAN')) !!}
    {!! Form::text('IBAN', null, ['class' => 'form-control']) !!}
</div>

<!-- Sex Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sex', __('Models/Employee.Sex')) !!}

    {!! Form::select('Sex', ['ذكر' => 'ذكر', 'اثني' => 'اثني', 'غير ذلك' => 'غير ذلك'], 'ذكر', ['class' => 'form-control']) !!}
</div>

<!-- Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Salary', __('Models/Employee.Salary')) !!}
    {!! Form::number('Salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('Models/Employee.create'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.employees.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
