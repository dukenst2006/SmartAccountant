@extends('adminlte::page')
@section('title', 'Products')

@section('content_header')
    <h1>@lang('Models/Product.Product')</h1>
@stop



@section('content')

    <div class="row justify-content-center">



     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">@lang('Models/Product.Product')</h3>
            </div>


              <div class="card-body" style="padding: 20px !important;">

                 <form >
                    @include('admin.products.show_fields')
                    <a href="{{ route('admin.products.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i> رجوع </a>
                </form>


            </div>



        </div>



    </div>
@endsection
