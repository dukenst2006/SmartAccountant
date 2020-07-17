@extends('adminlte::page')
@section('title', 'تقارير مبيعات الفروع')

@section('content_header')
    <h1>تقارير مبيعات الفروع</h1>
@stop

@section('content')

    <div class="row justify-content-center">


        <div class="col-md-8">

            <p class="text-center">
                <strong> المبيعات</strong>
            </p>
            <div id="chart">

                {!! $chart->container() !!}

            </div>


        </div>

    </div>

    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">

    </div>
    <div class="text-center">
        {{--       @include('adminlte-templates::common.paginate', ['records' => $inventories])--}}

    </div>

@endsection

@section('customejs')
    {!! $chart->script() !!}
@endsection

