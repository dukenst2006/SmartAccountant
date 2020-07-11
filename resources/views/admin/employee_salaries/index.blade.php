@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <h4 class="col-12 text-center">{{__("menu.EmployeesSalaries")}}</h4>
        <div class="card">
            <div class="card-header">
                انشاء
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'admin.EmployeeSalary.store','files'=> true]) !!}
                <div class="form-group col-sm-12">
                    {!! Form::label('Name',__('/Models/User.Name')) !!}
                    {!! Form::text('Name', null , ['class' => 'form-control' ]) !!}
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::label('MarketPlaceID',__('menu.Marketplaces')) !!}
                    {!! Form::select('MarketPlaceID', $MarketPlaces ,null , ['class' => 'form-control' ]) !!}
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::label('File',__('General.File')) !!}
                    {!! Form::file('File' , ['class' => 'form-control' ]) !!}
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::submit(__('General.Create'), ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                {{__("General.All")}}
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>{{__("Models/Marketplace.Address")}}</td>
                            <td>{{__("General.Titles.Branch")}}</td>
                            <td>{{__("General.File")}}</td>
                            <td>{{__("General.About.Order")}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($EmployeeSalaries  as $salary)
                            <tr>
                                <td>{{$salary->Name}}</td>
                                <td>{{$salary->marketplace->Name}}</td>
                                <td>
                                    <a href="{{route('admin.EmployeeSalary.show',$salary)}}" target="_blank" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('admin.EmployeeSalary.destroy',$salary)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
