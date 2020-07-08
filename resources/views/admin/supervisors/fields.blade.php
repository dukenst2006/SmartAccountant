
<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name',__('/Models/User.Name')) !!}
    {!! Form::text('Name', $employee->User->Name, ['class' => 'form-control']) !!}
</div>


<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PhoneNumber', 'Phonenumber:') !!}
    {!! Form::text('PhoneNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.supervisors.index') }}" class="btn btn-default">Cancel</a>
</div>
