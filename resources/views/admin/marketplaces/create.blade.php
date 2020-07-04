@extends('adminlte::page')
@section('title', 'Marketplaces')

@section('content_header')
        <h1>    Marketplace</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Marketplace
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Marketplace</h3>
                </div>
            <div class="card-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.marketplaces.store']) !!}

                        @include('marketplaces.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
