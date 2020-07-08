@extends('adminlte::page')
@section('title', 'Companies')

@section('content_header')
    <h1>    Companies</h1>
@stop

@section('content')



    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
            <div class="card-header">
                <h3 class="card-title">Companies</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'admin.companies.store']) !!}

                @include('admin.companies.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection
