@extends('adminlte::page')
@section('title', 'حضور وغياب الموظفين')

@section('content_header')
    <h1 class="mb-3"><i class="fas fa-file-invoice-dollar"></i> حضور وغياب الموظفين </h1>
@stop


@section('content')



        <div class="main-tbl" style="overflow:auto;">
            @include('flash::message')
            @include('employee_salary_infos.table')
        </div>

@stop

