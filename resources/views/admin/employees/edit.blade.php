@extends('adminlte::page')
@section('title', 'Employee')

@section('content_header')
     <h1>
            Employee
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Employee</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($employee, ['route' => ['admin.employees.update', $employee->id], 'method' => 'patch','files' => true]) !!}

                        @include('admin.employees.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
