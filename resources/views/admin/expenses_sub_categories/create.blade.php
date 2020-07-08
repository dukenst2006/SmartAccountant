@extends('adminlte::page')
@section('title', 'Expenses Sub Categories')

@section('content_header')
        <h1>    Expenses Sub Category</h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Expenses Sub Category</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.expensesSubCategories.store']) !!}

                        @include('admin.expenses_sub_categories.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
