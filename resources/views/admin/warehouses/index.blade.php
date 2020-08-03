@extends('adminlte::page')
@section('title', 'المخزن الرئيسي')

@section('content_header')
    <h1>@lang('Models/Warehouse.Warehouse')</h1>
@stop

@section('content')
    {{-- Cards --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{__('Models/Warehouse.CardTitle')}}</h3>
        </div>
        <div class="card-body card-body table-responsive p-0 chart-modifications">
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
            <div class="col-md-6 col-lg-6 col-xl-3 animated bounceInUp my-5">
                <div class="info-box bg-warning">
                    <div class="info-box-content">
                        <h5 class="info-box-text">{{__('Models/Warehouse.ProductCount')}}</h5>
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
    <div class="row justify-content-center" style="padding: 6px">
        {{-- Cards --}}
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">@lang('Models/Warehouse.Products')</h3>
            </div>
            <div class="card-body">
                <form action="{{route('ProductImport')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">@lang('Models/Warehouse.Import')</label>
                        <input type="file" name="excel" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">@lang('Models/Warehouse.Process')</button>
                    <a class="btn btn-success" href="{{route('ProductExport')}}">@lang('Models/Warehouse.Export')</a>
                </form>
            </div>
            <div class="card-body table-responsive p-0">
                <div class="row col-12  justify-content-start">
                    <a class="btn btn-success btn-lg" href="{{route('admin.products.create')}}">
                        <span class="fa fa-plus-square"></span>
                        {{__('Buttons.Add')}}</a>

                </div>

                @include('flash::message')


                <div class="overflow-auto">
                    @include('admin.products.table')
                </div>
            </div>
        </div>
    </div>




@endsection

@section('customejs')
    {!! $chart->script() !!}
@endsection
