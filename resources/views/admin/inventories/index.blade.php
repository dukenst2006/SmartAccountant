@extends('adminlte::page')
@section('title', 'مخازن الفروع')

@section('content_header')
    <h1>{{__('Models/Inventory.Header')}}</h1>
@stop

@section('content')
    <div class="row justify-content-center">
    <div class="col-md-8 my-4 chart-modifications ">
        <h3 class="text-center my-3">مستوي المنتجات في مخازن الفروع</h3>




            <div id="chart">

                {!! $inventoriesCharts->container() !!}

            </div>


    </div>

    </div>
    <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.inventories.table')
            </div>
        </div>
        <div class="text-center">
        @include('adminlte-templates::common.paginate', ['records' => $inventories])

        </div>

@endsection

@section('customejs')
    {!! $inventoriesCharts->script() !!}
@endsection

