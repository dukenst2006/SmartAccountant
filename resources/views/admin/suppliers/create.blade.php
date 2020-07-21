@extends('adminlte::page')
@section('title', 'Suppliers')

@section('content_header')
    <h1>{{__("General.Titles.Suppliers")}}</h1>
@stop

@section('content')


    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
            <div class="card-header">
                <h3 class="card-title">{{__("General.Create")}}</h3>
            </div>
            <div class="card-body" style="padding: 10px !important;">
                {!! Form::open(['route' => 'admin.suppliers.store']) !!}

                @include('admin.suppliers.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
