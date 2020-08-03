@extends('adminlte::page')
@section('title', 'الأصناف الفرعية')

@section('content_header')
    <h1>{{__('Models/Product.ProductSubCategories')}}</h1>
@stop



@section('content')

    <div class="row justify-content-center">


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">{{__('Models/Product.ProductSubCategories')}}</h3>
            </div>


              <div class="card-body">

                 <form class="form-shape" >
                    @include('admin.product_sub_categories.show_fields')
                    <a href="{{ route('admin.productSubCategories.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i> {{__('General.Back')}}</a>
                </form>


            </div>



        </div>



    </div>
@endsection
