@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('customecss')
    @livewireStyles
@endsection




@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @livewire('counter')

                </div>
            </div>
        </div>
    </div>
@stop

@section('customejs')
 @livewireScripts

    @endsection
