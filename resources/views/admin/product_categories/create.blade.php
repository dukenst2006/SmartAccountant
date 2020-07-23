@extends('adminlte::page')
@section('title', 'Product Categories')

@section('content_header')
        <h1> {{__('Models/Product.ProductCategories')}}</h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">{{__('Models/Product.ProductCategories')}}</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.productCategories.store']) !!}

                        @include('admin.product_categories.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
