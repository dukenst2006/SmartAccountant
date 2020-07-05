@extends('adminlte::page')
@section('title', 'Product Sub Categories')

@section('content_header')
        <h1>    Product Sub Category</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Product Sub Category
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Product Sub Category</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.productSubCategories.store']) !!}

                        @include('admin.product_sub_categories.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
