@extends('adminlte::page')
@section('title', 'Users')

@section('content_header')
        <h1>Users</h1>
@stop

@section('content')
       <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('users.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>

        {{-- Cards --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('users.table')

                <div class="text-center">
                    @include('adminlte-templates::common.paginate', ['records' => $users])

                </div>
            </div>
        </div>
    </div>


@endsection

