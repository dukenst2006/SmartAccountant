@extends('adminlte::page')
@section('title', 'Product Categories')

@section('content_header')
        <h1>    Product Category</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Product Category
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Product Category</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.productCategories.store']) !!}

                        @include('admin.product_categories.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
