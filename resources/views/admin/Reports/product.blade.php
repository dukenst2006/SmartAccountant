@extends('adminlte::page')
@section('title', 'تقارير المنتجات')

@section('content_header')
    <h1>تقارير المنتجات</h1>
@stop

@section('content')

    <div class="row justify-content-center">


        <div class="col-md-8">

            <p class="text-center">
                <strong> أعلي 10 منتجات مبيعاً هذا الشهر</strong>
            </p>
            <div id="chart">

                {!! $productchart->container() !!}

            </div>


        </div>

    </div>
    <div class="row justify-content-center">


    <div class="col-md-8">




            <div id="chart">

               {!! $productchart->container() !!}

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
    {!! $productchart->script() !!}
@endsection

