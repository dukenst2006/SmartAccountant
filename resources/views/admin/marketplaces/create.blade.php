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
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.marketplaces.store','files'=>true]) !!}

                        @include('admin.marketplaces.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
