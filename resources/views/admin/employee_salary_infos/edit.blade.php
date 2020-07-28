@extends('adminlte::page')
@section('title', 'حضور وغياب الموظفين')

@section('content_header')
    <a href="{{route('admin.employees.show',$employeeSalaryInfo->employee)}}">
        <h1 class="mb-3"><i class="fas fa-file-invoice-dollar"></i> {{$employeeSalaryInfo->employee->User->Name}}</h1>
    </a>
@stop


@section('content')

    <div class="card m-2">
        <div class="card-header">
            {{__('General.Create')}}
        </div>
        <div class="card-body p-2">
            <form class="p-3" action="{{route('admin.employeeSalaryInfos.update',$employeeSalaryInfo)}}" method="post">
                @csrf
                @method('patch')
                <input type="hidden" name="EmployeeID" value="{{$employeeSalaryInfo->employee->id}}">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">{{__('Models/EmployeeSalaryInfos.Allowances')}}</label>
                        <input type="number" class="form-control" value="{{$employeeSalaryInfo->Allowances}}" name="Allowances">
                    </div>
                    <div class="form-group col-6">
                        <label for="">{{__('Models/EmployeeSalaryInfos.Deductions')}}</label>
                        <input type="number" class="form-control" value="{{$employeeSalaryInfo->Deductions}}" name="Deductions">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">{{__('Models/EmployeeSalaryInfos.Description')}}</label>
                    <textarea name="Description" id="" class="form-control" rows="10">{{$employeeSalaryInfo->Description}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">{{__('General.save')}}</button>
            </form>
        </div>
    </div>>

@stop

