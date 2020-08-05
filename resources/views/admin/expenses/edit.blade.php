@extends('adminlte::page')
@section('title', 'المصروفات')

@section('content_header')
     <h1>
            Expense
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Expense</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($expense, ['route' => ['admin.expenses.update', $expense->->id], 'method' => 'patch']) !!}

                        @include('admin.expenses.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
