@extends('adminlte::page')
@section('title', 'Expenses Categories')

@section('content_header')
        <h1> {{__('Models/Expenses.ExpensesMainCategory')}}</h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">{{__('Models/Expenses.ExpensesMainCategory')}}</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.expensesCategories.store']) !!}

                        @include('admin.expenses_categories.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
