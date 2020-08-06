@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <a href="{{route('admin.marketplaceOwner.index')}}" class="btn btn-success"><i class="fa fa-list"></i></a>
        <div class="card m-2">
            <div class="card-header">
                {{__('Models/Bonds.Columns.MarketPlaceOwner')}}
            </div>
            <div class="card-body">
                <form action="{{route('admin.marketplaceOwner.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">{{__("Models/User.Name")}}</label>
                        <input class="form-control" name="Name">
                    </div>
                    <div class="form-group">
                        <label for="">{{__("Models/User.Email")}}</label>
                        <input class="form-control" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="">{{__("General.fields.Phonenumber")}}</label>
                        <input class="form-control" name="PhoneNumber">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="password" name="Password">
                    </div>
                    <button type="submit" class="btn btn-success">{{__('Buttons.Save')}}</button>
                </form>
            </div>

        </div>
@endsection
