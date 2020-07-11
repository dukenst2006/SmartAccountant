@extends('adminlte::page')
@section('title', 'Supervisors')

@section('content_header')
        <h1>{{__("menu.Supervisors")}}</h1>
@stop

@section('content')
       <div class="row justify-content-center">
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">{{__("menu.Supervisors")}}</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('admin.supervisors.table')

                <div class="text-center">

                </div>
            </div>
        </div>
    </div>


@endsection

