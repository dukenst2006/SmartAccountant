<div class="row m-0 p-0 w-100">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('Name', __('Models/Companies.Name').':') !!}
        {!! Form::text('Name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Address Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('Address', __('Models/Companies.Address').':') !!}
        {!! Form::text('Address', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Country Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('Country', __('Models/Companies.Country').':') !!}
        {!! Form::text('Country', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Country Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('IBAN', __('General.Bank Account Number').':') !!}
        {!! Form::text('IBAN', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Phonenumber Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('PhoneNumber', __('Models/Companies.PhoneNumber').':') !!}
        {!! Form::text('PhoneNumber', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Description Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('Description', __('Models/Companies.Description').':') !!}
        {!! Form::textarea('Description', __('Models/Companies.Description'), ['class' => 'form-control']) !!}

    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('admin.companies.index') }}" class="btn btn-default">{{__('Buttons.Cancel')}}</a>
    </div>

</div>