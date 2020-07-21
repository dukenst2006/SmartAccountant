@extends('adminlte::page')
@section('title', 'Products')

@section('content_header')
        <h1>@lang('Models/Product.Products')</h1>
@stop

@section('content')
       <div class="row justify-content-center">

        {{-- Cards --}}
        <div class="card col-12">
            <div class="card-header">
                <h3 class="card-title">@lang('Models/Product.Products')</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('admin.products.table')

                <div class="text-center">

                </div>
            </div>
        </div>
    </div>


@endsection

