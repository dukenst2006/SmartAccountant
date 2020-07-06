{{--<!-- Userid Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('UserID',__('')) !!}--}}
{{--    {!! Form::number('UserID', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Marketplaceid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplaceID', __('menu.Marketplaces')) !!}
    {!! Form::select('MarketplaceID',$marketplaces, null,['class' => 'form-control']) !!}
</div>

<!-- Marketplaceownerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplaceOwnerID', __('employee.MarketOwner')) !!}
    {!! Form::select('MarketplaceOwnerID', $marketplace_owners,null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nationality', __('employee.nation')) !!}
    {!! Form::text('Nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Jobtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('JobTitle', __('employee.job')) !!}
    {!! Form::text('JobTitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationalid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NationalID', __('employee.identity_number')) !!}
    {!! Form::text('NationalID', null, ['class' => 'form-control']) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PhoneNumber', __('employee.phone')) !!}
    {!! Form::text('PhoneNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Profileimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProfileImage', __('employee.image')) !!}
    {!! Form::file('ProfileImage', ['class' => 'form-control']) !!}
</div>

<!-- Identityimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IdentityImage', __('employee.identity_img')) !!}
    {!! Form::file('IdentityImage', ['class' => 'form-control']) !!}
</div>

<!-- Employmentcontractimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EmploymentContractImage', __('employee.contract_img')) !!}
    {!! Form::file('EmploymentContractImage', ['class' => 'form-control']) !!}
</div>

<!-- Iban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IBAN', __('employee.bank_account')) !!}
    {!! Form::text('IBAN', null, ['class' => 'form-control']) !!}
</div>

<!-- Sex Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sex', __('employee.sex')) !!}
    {!! Form::text('Sex', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Salary', __('employee.salary')) !!}
    {!! Form::number('Salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('employee.create'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.employees.index') }}" class="btn btn-default">Cancel</a>
</div>
