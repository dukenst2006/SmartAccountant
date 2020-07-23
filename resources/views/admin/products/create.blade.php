@extends('adminlte::page')
@section('title', 'Products')

@section('content_header')
        <h1>    @lang('Models/Product.Product') </h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title"> @lang('Models/Product.Product')  </h3>
                </div>
            <div class="card-body" style="padding: 10px !important;">
                    {!! Form::open(['route' => 'admin.products.store','files'=>true]) !!}

                        <div class="row w-100 m-0 p-0">
                            @include('admin.products.fields')
                        </div>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
