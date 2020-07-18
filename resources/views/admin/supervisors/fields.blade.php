<!-- UserName Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name',__('/Models/User.Name')) !!}
    {!! Form::text('Name', $supervisor->User->Name?? '' , ['class' => 'form-control' ]) !!}
</div>

<!-- UserPassword Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Password',__('/Models/User.Password')) !!}
    {!! Form::text('Password', null ,['class' => 'form-control' ,'minlength'=>'8']) !!}
</div>


<!-- UserEmail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email',__('/Models/User.Email')) !!}
    {!! Form::email('Email', $supervisor->User->Email?? '' , ['class' => 'form-control']) !!}
</div>

<!-- Jobtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('JobTitle', __('Models/Supervisor.JobTitle')) !!}
    {!! Form::text('JobTitle', null, ['class' => 'form-control']) !!}
</div>



<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PhoneNumber',  __('Models/Supervisor.PhoneNumber')) !!}
    {!! Form::text('PhoneNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.supervisors.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>

