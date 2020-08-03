@extends('adminlte::page')
@section('title', 'المنتجات')

@section('content_header')
     <h1>
         @lang('Models/Product.Product')
     </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">@lang('General.Edit') </h3>

               </div>
           <div class="card-body">

                   {!! Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'patch']) !!}

                        @include('admin.products.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
