@extends('adminlte::page')
@section('title', 'Expenses')

@section('content_header')
        <h1> @lang('Models/Expenses.Expenses')</h1>
@stop

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title"> @lang('Models/Expenses.Expenses')</h3>
                </div>
            <div class="card-body" style="padding: 10px !important;">
                    {!! Form::open(['route' => 'admin.expenses.store']) !!}

                        <div class="row w-0 p-0 w-100">
                            @include('admin.expenses.fields')
                        </div>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
