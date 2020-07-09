@extends('adminlte::page')
@section('title', 'Employees')

@section('content_header')
    <h1>الشركات</h1>
@stop

@section('content')
    <div class="row justify-content-center">

        {{-- Cards --}}
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">الكل</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
                @include('admin.companies.table')

                <div class="text-center">

                </div>
            </div>
        </div>
    </div>
@endsection

