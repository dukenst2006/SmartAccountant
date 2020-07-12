@extends('adminlte::page')
@section('title', 'Stocks')

@section('content_header')
@stop

@section('content')
    <div class="row justify-content-center">
    <div class="col-md-8">




            <div id="chart">

{{--                {!! $inventoriesCharts->container() !!}--}}

            </div>


    </div>

    </div>
    <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">

        </div>
        <div class="text-center">
{{--        @include('adminlte-templates::common.paginate', ['records' => $inventories])--}}

        </div>

@endsection

@section('customejs')
{{--    {!! $inventoriesCharts->script() !!}--}}
@endsection

