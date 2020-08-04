@extends('adminlte::page')
@section('title', 'حضور وغياب الموظفين')

@section('content_header')
    <a href="{{route('admin.employees.show',$employee)}}">
        <h1 class="mb-3">
            <i class="fas fa-file-invoice-dollar"></i> {{$employee->User->Name}}</h1>
        <br>
        الفرع {{ $employee->marketplace->Name }}

    </a>
@stop


@section('content')

        <div class="card m-2">
            <div class="card-header">
                {{__('General.Create')}}
            </div>
            <div class="card-body p-2">
                <form class="p-3" action="{{route('admin.employeeSalaryInfos.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="EmployeeID" value="{{$employee->id}}">
                    <div class="form-group">
                        <label for="">{{__('Models/EmployeeSalaryInfos.Description')}}</label>
                        <textarea name="Description" id="" class="form-control" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">{{__('General.Create')}}</button>
                </form>
            </div>
        </div>


        <div class="main-tbl" style="overflow:auto;">
            @include('flash::message')
            @include('admin.employee_salary_infos.table')
        </div>

@stop

