@extends('adminlte::page')
@section('title', 'Users')

@section('content_header')
        <h1>    User</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            User
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">User</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'users.store']) !!}

                        @include('users.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
