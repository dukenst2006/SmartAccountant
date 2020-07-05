@extends('adminlte::page')
@section('title', 'Products')

@section('content_header')
    <h1>Product</h1>
@stop



@section('content')

    <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('admin.products.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Product</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('admin.products.show_fields')
                    <a href="{{ route('admin.products.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
