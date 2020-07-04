@extends('adminlte::page')
@section('title', 'Marketplaces')

@section('content')
    <div class="row justify-content-center">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Marketplaces </h3>
            </div>

            <div class="card-body card-body table-responsive p-0">
                @include('admin.marketplaces.table')
            </div>

        </div>


        <div class="text-center">
            @include('adminlte-templates::common.paginate', ['records' => $marketplaces])

        </div>
    </div>
@endsection

