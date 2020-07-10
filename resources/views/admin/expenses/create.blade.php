@extends('adminlte::page')
@section('title', 'Expenses')

@section('content_header')
        <h1>    Expense</h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Expense</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'admin.expenses.store']) !!}

                        @include('admin.expenses.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
