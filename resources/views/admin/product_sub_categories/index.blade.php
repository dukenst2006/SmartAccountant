@extends('adminlte::page')
@section('title', 'Product Sub Categories')

@section('content_header')
        <h1>Product Sub Categories</h1>
@stop

@section('content')
       <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('admin.productSubCategories.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>

        {{-- Cards --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product Sub Categories</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('admin.product_sub_categories.table')

                <div class="text-center">
                    
                </div>
            </div>
        </div>
    </div>


@endsection

