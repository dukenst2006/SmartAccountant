@extends('adminlte::page')
@section('title', 'Suppliers')

@section('content_header')
    <h1>
        Suppliers
    </h1>
@stop

@section('content')

    <div class="row justify-content-center">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                <h3 class="card-title">Suppliers</h3>

            </div>
            <div class="card-body">
                {!! Form::model($supplier, ['route' => ['admin.suppliers.update', $supplier->id], 'method' => 'patch']) !!}

                @include('admin.suppliers.fields')

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
