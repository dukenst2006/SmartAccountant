@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <a class="btn btn-success" href="{{route('plan.index')}}"><i class="fa fa-list"></i></a>
        <div class="card mt-2">
            <div class="card-header">
                {{__('General.Create')}}
            </div>
            <div class="card-body">
                <form action="{{route('plan.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">{{__('Models/User.Name')}}</label>
                        <input name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Models/Expenses.Price')}}</label>
                        <input name="price" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">{{__('Buttons.Save')}}</button>
                </form>
            </div>
        </div>
    </div>
@stop
