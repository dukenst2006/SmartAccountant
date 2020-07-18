@extends('adminlte::page')
@section('title', 'Stocks')

@section('content_header')
    <h1>المخزن الرئيسي</h1>
@stop

@section('content')
    {{-- Cards --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{__('Models/Warehouse.CardTitle')}}</h3>
        </div>
        <div class="card-body card-body table-responsive p-0">
            <div class="col-md-12">
                <p class="text-center">
                    <strong>اعلي 10 كميات بالمخزن الرئيسي</strong>
                </p>

                <div class="chart text-center">


                    <div id="chart" style="height: 300px; width: 1072px;" height="300" width="1072">

                        {!! $chart->container() !!}

                    </div>
                </div>

            </div>


            <div class="col-3 animated bounceInUp m-5">

                <div class="info-box bg-warning">

                    <div class="info-box-content">
                        <h4 class="info-box-text">{{__('Models/Warehouse.ProductCount')}}</h4>
                        <h4 class="info-box-number">

                            {{ $warehouse->products_count ??'0' }}

                        </h4>


                    </div>
                    <span class="info-box-icon">
                        <i class="fas fa-2x  fa-boxes"></i>
                    </span>

                </div>



            </div>
                    </div>
    </div>


    <div class="row justify-content-center">

        {{-- Cards --}}
        <div class="card col-12">
            <div class="card-header">
                <h3 class="card-title">Products</h3>
            </div>
            <div class="col-12 text-left" href="{{route('ProductExport')}}">excel</div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
                @include('admin.products.table')

                <div class="text-center">

                </div>
            </div>
        </div>
    </div>




@endsection

@section('customejs')
    {!! $chart->script() !!}
@endsection
