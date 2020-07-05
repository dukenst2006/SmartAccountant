@extends('adminlte::page')
@section('title', 'Product Categories')

@section('content_header')
     <h1>
            Product Categories
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Product Categories</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($productCategories, ['route' => ['admin.productCategories.update', $productCategories->id], 'method' => 'patch']) !!}

                        @include('admin.product_categories.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
