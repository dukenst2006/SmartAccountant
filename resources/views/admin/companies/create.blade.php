@extends('adminlte::page')
@section('title', 'Companies')

@section('content_header')
    <h1>    الشركات</h1>
@stop

@section('content')



    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
            <div class="card-header">
                <h3 class="card-title">انشاء</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'admin.companies.store']) !!}

                @include('admin.companies.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection
