@extends('adminlte::page')
@section('title', 'Products')

@section('content_header')
        <h1>    Product</h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Product</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.products.store','files'=>true]) !!}

                        @include('admin.products.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
