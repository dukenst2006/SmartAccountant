<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UserID', 'Userid:') !!}
    {!! Form::number('UserID', null, ['class' => 'form-control']) !!}
</div>

<!-- Marketplaceownerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MarketplaceOwnerID', 'Marketplaceowner:') !!}
    {!! Form::select('MarketplaceOwnerID',$marketplace_owners, null, ['class' => 'form-control']) !!}
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
