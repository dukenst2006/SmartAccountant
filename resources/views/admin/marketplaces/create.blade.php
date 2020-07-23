@extends('adminlte::page')
@section('title', 'Marketplaces')

@section('content_header')
        <h1>{{__("menu.Marketplaces")}}</h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">{{__("General.Create")}}</h3>
                </div>
            <div class="card-body" style="padding: 10px !important;">
                    {!! Form::open(['route' => 'admin.marketplaces.store','files'=>true]) !!}

                       <div class="row w-100 p-0 m-0">
                           @include('admin.marketplaces.fields')
                       </div>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
