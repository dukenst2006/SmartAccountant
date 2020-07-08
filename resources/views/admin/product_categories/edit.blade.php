@extends('adminlte::page')
@section('title', 'Product Category')

@section('content_header')
     <h1>
            Product Category
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Product Category</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($productCategory, ['route' => ['admin.productCategories.update', $productCategory->id], 'method' => 'patch']) !!}

                        @include('admin.product_categories.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
