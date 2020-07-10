@extends('adminlte::page')
@section('title', 'Supervisors')
@section('content_header')
        <h1>انشاء مشرف</h1>
@stop
@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">انشاء مشرف</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.supervisors.store']) !!}
                        @include('admin.supervisors.fields')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
