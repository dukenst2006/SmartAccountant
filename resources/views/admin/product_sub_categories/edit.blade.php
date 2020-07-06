@extends('adminlte::page')
@section('title', 'Product Sub Category')

@section('content_header')
     <h1>
            Product Sub Category
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Product Sub Category</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($productSubCategory, ['route' => ['admin.productSubCategories.update', $productSubCategory$ID ], 'method' => 'patch']) !!}

                        @include('admin.product_sub_categories.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
