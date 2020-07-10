<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $user->Name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $user->Email }}</p>
</div>

<!-- Emailverifiedat Field -->
<div class="form-group">
    {!! Form::label('EmailVerifiedAt', 'Emailverifiedat:') !!}
    <p>{{ $user->EmailVerifiedAt }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('Password', 'Password:') !!}
    <p>{{ $user->Password }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

