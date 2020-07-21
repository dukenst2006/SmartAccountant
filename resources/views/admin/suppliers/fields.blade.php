<div class="row m-0 p-0 w-100">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('Name', __('Models/Supplier.Name').':') !!}
        {!! Form::text('Name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Company Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('Company', __('Models/Companies.Name').':') !!}
        {!! Form::select('CompanyID', $companies , null , ['class' => 'form-control']) !!}


    </div>

    <!-- Phonenumber Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('PhoneNumber', __('Models/Supplier.PhoneNumber').':') !!}
        {!! Form::text('PhoneNumber', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Description Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('Description', __('Models/Supplier.Description').':') !!}
        {!! Form::textarea('Description',  __('Models/Supplier.Description') , ['class' => 'form-control']) !!}
    </div>



    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('admin.suppliers.index') }}" class="btn btn-default">{{__('Buttons.Cancel')}}</a>
    </div>

</div>