@extends('adminlte::page')
@section('title', 'الأصناف الرئيسية')

@section('content_header')
    <h1>Product Category</h1>
@stop



@section('content')

    <div class="row justify-content-center">



     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Product Category</h3>
            </div>


              <div class="card-body">

                 <form class="form-shape" >
                    @include('admin.product_categories.show_fields')
                    <a href="{{ route('admin.productCategories.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
