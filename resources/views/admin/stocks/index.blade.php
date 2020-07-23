@extends('adminlte::page')
@section('title', 'Stocks')

@section('content_header')
        <h1>Stocks</h1>
@stop

@section('content')
        {{-- Cards --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Stocks</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('admin.stocks.table')

                <div class="text-center">
                    @include('adminlte-templates::common.paginate', ['records' => $stocks])

                </div>
            </div>
        </div>
    </div>شو


@endsection

