<!-- Userid Field -->
<div class="form-group">
    {!! Form::label('UserID', __('Models/Supervisor.UserId') . ':') !!}
    <p>{{ $supervisor->UserID }}</p>
</div>



<!-- Phonenumber Field -->
<div class="form-group">
    {!! Form::label('PhoneNumber', __('Models/Supervisor.PhoneNumber') .  ':') !!}
    <p>{{ $supervisor->PhoneNumber }}</p>
</div>

