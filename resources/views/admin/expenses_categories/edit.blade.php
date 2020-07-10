@extends('adminlte::page')
@section('title', 'Expenses Category')

@section('content_header')
     <h1>
            Expenses Category
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Expenses Category</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($expensesCategory, ['route' => ['admin.expensesCategories.update', $expensesCategory->id], 'method' => 'patch']) !!}

                        @include('admin.expenses_categories.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
