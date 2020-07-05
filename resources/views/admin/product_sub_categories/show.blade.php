@extends('adminlte::page')
@section('title', 'Product Sub Categories')

@section('content_header')
    <h1>Product Sub Category</h1>
@stop



@section('content')

    <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('admin.productSubCategories.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Product Sub Category</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('admin.product_sub_categories.show_fields')
                    <a href="{{ route('admin.productSubCategories.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
