@extends('adminlte::page')
@section('title', 'Employees')

@section('content_header')
        <h1>    {{__('employee.create')}}</h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">{{__("employee.create")}}</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.employees.store','files'=> true]) !!}

                        @include('admin.employees.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
