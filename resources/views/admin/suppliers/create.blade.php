@extends('adminlte::page')
@section('title', 'Suppliers')

@section('content_header')
    <h1>الموزعين</h1>
@stop

@section('content')


    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
            <div class="card-header">
                <h3 class="card-title">انشاء</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'admin.suppliers.store']) !!}

                @include('admin.suppliers.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
