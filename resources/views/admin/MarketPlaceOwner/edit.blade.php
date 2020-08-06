@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <a href="{{route('admin.marketplaceOwner.index')}}" class="btn btn-success"><i class="fa fa-list"></i></a>
        <div class="card m-2">
            <div class="card-header">
                {{__('Models/Bonds.Columns.MarketPlaceOwner')}}
            </div>
            <div class="card-body">
                <form action="{{route('admin.marketplaceOwner.update',$marketplaceOwner)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="">{{__("Models/User.Name")}}</label>
                        <input class="form-control" value="{{$marketplaceOwner->user->Name}}" name="Name">
                    </div>
                    <div class="form-group">
                        <label for="">{{__("Models/User.Email")}}</label>
                        <input class="form-control" value="{{$marketplaceOwner->user->Email}}" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="">{{__("General.fields.Phonenumber")}}</label>
                        <input class="form-control" value="{{$marketplaceOwner->PhoneNumber}}" name="PhoneNumber">
                    </div>
                    <div class="form-group">
                        <label for="">{{__("Models/User.Password")}}</label>
                        <input class="form-control" value="same" type="password" name="Password">
                    </div>
                    <button type="submit" class="btn btn-success">{{__('Buttons.Update')}}</button>
                </form>
            </div>

        </div>
@endsection
